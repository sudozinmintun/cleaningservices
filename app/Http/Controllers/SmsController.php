<?php

namespace App\Http\Controllers;

use App\Http\Requests\sendEmail;
use App\Http\Requests\sendSMS;
use App\Models\SendHistory;
use Twilio\Rest\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SmsController extends Controller
{

    public function index(Request $request)
    {
        $send_histories = SendHistory::all();
        return view('admin.message_history.index', compact('send_histories'));
    }



    public function store(sendSMS $request)
    {
        $messageContent = $request->message;

        // Gather selected phone numbers and emails
        $selectedData = $request->input('selectedData', []);
        $phoneNumbers = [];
        $emails = [];

        foreach ($selectedData as $item) {
            if (filter_var($item, FILTER_VALIDATE_EMAIL)) {
                $emails[] = $item;
            } else {
                $phoneNumbers[] = $item;
            }
        }

        // Remove duplicate entries
        $phoneNumbers = array_unique($phoneNumbers);
        $emails = array_unique($emails);

        // Send SMS and log results
        foreach ($phoneNumbers as $phoneNumber) {
            if ($this->sendSMS($phoneNumber, $messageContent)) {
                Log::info('Successfully sent SMS to: ' . $phoneNumber);
            } else {
                Log::error('Failed to send SMS to: ' . $phoneNumber);
            }
        }

        // Save send history in database
        $selectedData = array_unique($selectedData);
        $send = new SendHistory();
        $send->message = $messageContent;
        $send->to = json_encode($selectedData);

        try {
            $send->save();
            return redirect()->back()->with('success', 'Your processing has been completed.');
        } catch (\Exception $e) {
            Log::error('Error saving SendHistory: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to save send history. Please try again.');
        }
    }



    private function sendSMS($to, $messageContent)
    {
        // Twilio credentials
        $sid = getenv("TWILIO_ACCOUNT_SID");
        $token = getenv("TWILIO_AUTH_TOKEN");
        $senderNumber = getenv("TWILIO_FROM");

        // Check if Twilio credentials are properly set
        if (!$sid || !$token || !$senderNumber) {
            Log::error('Twilio credentials are not properly set.');
            return false;
        }

        $twilio = new Client($sid, $token);

        try {
            // Attempt to send the SMS
            $twilio->messages->create(
                $to,
                [
                    'body' => $messageContent,
                    'from' => $senderNumber
                ]
            );
            return true;
        } catch (\Twilio\Exceptions\RestException $e) {
            // Twilio API specific errors
            Log::error('Twilio API error (' . $e->getCode() . '): ' . $e->getMessage());
            switch ($e->getCode()) {
                case 20404: // Invalid phone number
                    Log::error('Invalid phone number: ' . $to);
                    break;
                case 21610: // Opt-out
                    Log::error('Recipient has opted out of receiving SMS: ' . $to);
                    break;
                case 21614: // Invalid destination number
                    Log::error('Invalid destination number: ' . $to);
                    break;
                case 21408: // Permission denied
                    Log::error('Permission denied for sending SMS to: ' . $to);
                    break;
                case 20003: // Authentication error
                    Log::error('Twilio authentication failed.');
                    break;
                default:
                    Log::error('An unknown Twilio API error occurred.');
            }
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            // Handle network-related issues
            Log::error('Network error: ' . $e->getMessage());
        } catch (\Exception $e) {
            // Handle any other general exceptions
            Log::error('General error: ' . $e->getMessage());
        }

        return false;
    }







    // Send Mail 
    public function sendMail(sendEmail $request)
    {
        $message = $request->message;
        $subject = $request->subject;

        // Collect and validate selected emails
        $selectedData = $request->input('selectedData', []);
        $emails = array_filter($selectedData, function ($item) {
            return filter_var($item, FILTER_VALIDATE_EMAIL);
        });

        // Remove duplicate entries
        $emails = array_unique($emails);

        // Send Mail
        foreach ($emails as $email) {
            if (!$this->sendEmailToSubscribers($email, $request)) {
                Log::error('Failed to send email to: ' . $email);
            }
        }

        // Save the history of sent emails
        $send = new SendHistory();
        $send->message = $message;
        $send->subject = $subject;
        $send->to = json_encode($emails);

        try {
            $send->save();
            return redirect()->back()->with('success', 'Your processing has been completed.');
        } catch (\Exception $e) {
            Log::error('Failed to save send history: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to save send history:' . $e->getMessage());
        }
    }



    protected function sendEmailToSubscribers($email, $request)
    {
        try {

            $emailContent = view('admin.subscribe.mail_template', compact('request'))->render();

            $subject = $request->subject ?? '';

            $headers  = "From: Cleaning Service <" . env('MAIL_FROM_ADDRESS') . ">\r\n";
            $headers .= "Reply-To: Cleaning Service <" . env('MAIL_FROM_ADDRESS') . ">\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";


            return mail($email, $subject, $emailContent, $headers);
        } catch (\Exception $e) {
            Log::error('Failed to send email to: ' . $email . ' with error: ' . $e->getMessage());
            return false;
        }
    }
}
