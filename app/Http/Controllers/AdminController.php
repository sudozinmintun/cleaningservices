<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Estimate;
use App\Models\Post;
use App\Models\User;
use App\Models\Visitor;
use Carbon\Carbon;
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





        // Site Visitor
        $today = Carbon::today();
        $todayCount = Visitor::whereDate('created_at', $today)->count();
        view()->share('todayCount', $todayCount);

        $startDate = Carbon::now()->startOfWeek(); // Start of the current week (Sunday by default)
        $endDate = Carbon::now()->endOfWeek();     // End of the current week (Saturday by default)
        $ThisWeek = Visitor::whereBetween('created_at', [$startDate, $endDate])->count();
        view()->share('ThisWeek', $ThisWeek);


        $currentMonth = Carbon::now()->format('m'); // Get the current month as a two-digit string
        $currentMonthCount = Visitor::whereMonth('created_at', $currentMonth)->count();
        view()->share('currentMonthCount', $currentMonthCount);


        $currentYear = Carbon::now()->year; // Get the current year
        $currentYearCount = Visitor::whereYear('created_at', $currentYear)->count();
        view()->share('currentYearCount', $currentYearCount);


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
