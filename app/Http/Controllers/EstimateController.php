<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstimate;
use App\Models\Estimate;
use Illuminate\Http\Request;

class EstimateController extends Controller
{
    public function index()
    {
        return view('estimate.index');
    }


    public function store(StoreEstimate $request)
    {
        $estimate = new Estimate();
        $estimate->name = $request->name;
        $estimate->phone = $request->phone;
        $estimate->email = $request->email;
        $estimate->p_type = $request->p_type;
        $estimate->no_bed = $request->no_bed;
        $estimate->no_bath = $request->no_bath;
        $estimate->f_type = $request->f_type;
        $estimate->s_room = $request->s_room;
        $estimate->clean_service_period = $request->clean_service_period;
        $estimate->clean_service_period_other = $request->clean_service_period_other;
        $estimate->clean_service = (!empty($request->clean_service)) ? json_encode($request->clean_service) : null;
        $estimate->clean_service_other = $request->clean_service_other;
        $estimate->pets = $request->pets;
        $estimate->pet_type = $request->pet_type;
        $estimate->allergies_sensitives = $request->allergies_sensitives;
        $estimate->present = $request->present;
        $estimate->access = $request->access;
        $estimate->attension = $request->attension;
        $estimate->request = $request->additional_request;
        $estimate->hear = $request->hear;
        $estimate->extra = $request->extra;
        $estimate->save();
        $stimate = $estimate;

        $this->sendEstimateEmailToAdmin($estimate, $request);
        $this->sendEstimateEmailToClient($estimate, $request);

        return redirect()->back()->with('success', 'Thanks for your application.');
    }


    protected function sendEstimateEmailToAdmin($estimate, $request)
    {
        $emailContent = view('estimate.mail_template', compact('estimate'))->render();

        $to = 'tomail@gmail.com';   //siteadmin@gmail.com
        $subject = 'New Estimate: ' . ($request->name ?? '');
        $headers = 'From: ' . env('MAIL_FROM_ADDRESS') . "\r\n";
        $headers .= "Reply-To: $request->name <$request->email>\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        mail($to, $subject, $emailContent, $headers);
    }


    protected function sendEstimateEmailToClient($estimate, $request)
    {
        $emailContent = view('estimate.mail_template', compact('estimate'))->render();

        $to = $request->email;
        $subject = 'Estimate: ' . ($request->name ?? '');
        $headers = 'From: ' . env('MAIL_FROM_ADDRESS') . "\r\n";
        $headers .= "Reply-To: Cleaning service <" . env('MAIL_FROM_ADDRESS') . ">\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        mail($to, $subject, $emailContent, $headers);
    }
}
