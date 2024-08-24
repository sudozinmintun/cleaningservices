<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContact;
use App\Http\Requests\StoreSubscribe;
use App\Models\Contact;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('contact.index');
    }

    public function store(StoreContact $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->back()->with('success', 'Thanks for your inquiry. We will respond accordingly.');
    }


    public function subscribe(StoreSubscribe $request)
    {
        $subscribe = new Subscribe();
        $subscribe->email_phone = $request->email_phone;
        $subscribe->save();

        return redirect()->back()->with('success', 'Thanks for your inquiry. We will respond accordingly.');
    }
}
