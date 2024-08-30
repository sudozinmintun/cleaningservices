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


        // Send SMS
        foreach ($phoneNumbers as $phoneNumber) {
            if (!$this->sendSms($phoneNumber, $messageContent)) {
                Log::error('Failed to send SMS to: ' . $phoneNumber);
            }
        }


        $send = new SendHistory();
        $send->message = $messageContent;
        $send->to = array_unique($selectedData);
        $send->save();

        return redirect()->back()->with('success', 'Your processing has been completed.');
    }


    private function sendSMS($to, $messageContent)
    {
        $sid = getenv("TWILIO_ACCOUNT_SID");
        $token = getenv("TWILIO_AUTH_TOKEN");
        $senderNumber = getenv("TWILIO_FROM");

        $twilio = new Client($sid, $token);

        try {
            $twilio->messages->create(
                $to, // to receive number
                [
                    'body' => $messageContent,
                    'from' => $senderNumber
                ]
            );
            return true;
        } catch (\Twilio\Exceptions\RestException $e) {
            Log::error('Twilio API error: ' . $e->getMessage());
        } catch (\Exception $e) {
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
            return redirect()->back()->with('error', 'Failed to save send history.');
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
