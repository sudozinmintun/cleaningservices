<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function index()
    {
        $subscribes = Subscribe::where('email_phone', 'not like', '%@%')->get();
        return view('admin.subscribe.index', compact('subscribes'));
    }

    public function email_subscribers()
    {
        $subscribes = Subscribe::where('email_phone', 'like', '%@%')->get();
        return view('admin.subscribe.email_subscribers', compact('subscribes'));
    }
}
