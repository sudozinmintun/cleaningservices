<?php

namespace App\Http\Controllers;

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

        // Send Mail 
        foreach ($emails as $email) {
            $subject = 'Cleaning service Company';
            $emailContent = $this->composeEmailContent($messageContent);

            if (!$this->sendEmail($email, $subject, $emailContent)) {
                Log::error('Failed to send email to: ' . $email);
            }
        }


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


    private function composeEmailContent($messageContent)
    {
        return "<html><body>
                    <h4>Cleaning service Company</h4>
                    <p>" . htmlspecialchars($messageContent) . "</p>
                </body></html>";
    }

    private function sendEmail($to, $subject, $emailContent)
    {
        $headers = 'From: ' . env('MAIL_FROM_ADDRESS') . "\r\n";
        $headers .= "Reply-To: Cleaning service Company <" . env('MAIL_FROM_ADDRESS') . ">\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        return mail($to, $subject, $emailContent, $headers);
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
}
