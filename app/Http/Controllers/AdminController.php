<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Estimate;
use App\Models\Post;
use App\Models\User;
use App\Models\Visitor;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        $months = [date('F-Y', strtotime("-5 month"))];
        $yearMonths = [
            [
                'year' => date('Y'),
                'month' => date('m', strtotime("-5 month")),
            ]
        ];
        for ($i = -4; $i <= 0; $i++) {
            $months[] = date('F-Y', strtotime("+$i month"));
            $yearMonths[] = [
                'year' => date('Y', strtotime("+$i month")),
                'month' => date('m', strtotime("+$i month")),
            ];
        }
        $estimateData = [];
        foreach ($yearMonths as $key => $ym) {
            $estimateData[] =  Estimate::whereYear('created_at', $ym['year'])->whereMonth('created_at', $ym['month'])->count();
        }




        $totalVisitorCount = Visitor::sum('visitor_count');
        $totalUser = User::count();
        $totalPost = Post::count();
        $totalEstimate = Estimate::count();

        return view('admin.dashboard', compact('estimateData', 'months', 'totalVisitorCount', 'totalUser', 'totalPost', 'totalEstimate'));
    }

    public function estimate()
    {
        $estimates = Estimate::all();
        return view('admin.estimate.index', ['estimates' => $estimates]);
    }

    public function viewEstimate($id)
    {
        $estimate = Estimate::findOrFail($id);
        return view('admin.estimate.view', ['estimate' => $estimate]);
    }


    public function contact()
    {
        $contacts = Contact::all();
        return view('admin.contacts.index', ['contacts' => $contacts]);
    }

    public function viewContact($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contacts.view', ['contact' => $contact]);
    }
}
