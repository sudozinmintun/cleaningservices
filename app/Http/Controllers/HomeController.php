<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use Jenssegers\Agent\Agent;


class HomeController extends Controller
{
    public function index(Request $request)
    {
        $agent = new Agent();

        $visitor = new Visitor();
        $visitor->visitor_count = 1;
        $visitor->ip = $request->ip();
        $visitor->devices = $agent->device(); // Get the device name
        $visitor->platform = $agent->platform(); // Get the platform name
        $visitor->browser = $agent->browser(); // Get the browser name
        $visitor->save();


        $imageDirectory = public_path('data/gallery/');
        $galleries = [];
        if (is_dir($imageDirectory)) {
            $imageFiles = scandir($imageDirectory);
            foreach ($imageFiles as $file) {
                if (is_file($imageDirectory . '/' . $file)) {
                    $galleries[] = $file;
                }
            }
        }

        // Initially display only 6 images
        $initialGalleries = array_slice($galleries, 0, 8);

        return view('welcome', compact('initialGalleries', 'galleries'));
    }


    public function loadGallery(Request $request)
    {
        $imageDirectory = public_path('data/gallery/');
        $galleries = [];
        $limit = $request->input('limit', 8);  // Default limit is 6
        $offset = $request->input('offset', 0);

        if (is_dir($imageDirectory)) {
            $imageFiles = array_diff(scandir($imageDirectory), array('.', '..'));
            $galleries = array_slice($imageFiles, $offset, $limit);
        }

        return response()->json(['galleries' => $galleries]);
    }
}
