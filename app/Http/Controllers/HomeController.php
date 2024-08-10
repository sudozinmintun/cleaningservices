<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $visitor = Visitor::firstOrNew(['id' => 1]);
        $visitor->visitor_count = $visitor->visitor_count + 1;
        $visitor->save();

        return view('welcome');
    }
}
