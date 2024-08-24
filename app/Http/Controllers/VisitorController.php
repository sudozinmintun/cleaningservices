<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index(Request $request)
    {
        $visitors = Visitor::all();


       


        $totalCount = Visitor::count();
        view()->share('totalCount', $totalCount);

        return view('admin.visitor.index', compact('visitors'));
    }
}
