<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function index()
    {
        $subscribes = Subscribe::all();
        return view('admin.subscribe.index', compact('subscribes'));
    }
}
