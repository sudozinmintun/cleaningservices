<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use Illuminate\Support\Facades\Http;
use Jenssegers\Agent\Agent;


class HomeController extends Controller
{
    public function index(Request $request)
    {

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




    public function storeLocation(Request $request)
    {

        $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        // Reverse geocode the latitude and longitude to get the address using Nominatim
        $nominatimUrl = "https://nominatim.openstreetmap.org/reverse?format=json&lat={$request->latitude}&lon={$request->longitude}";

        // Fetch the location data from Nominatim
        $response = Http::withHeaders(['User-Agent' => 'Cleaning Service'])->get($nominatimUrl);

        if ($response->ok()) {
            $locationInfo = $response->json();
            $address = isset($locationInfo['display_name']) ? $locationInfo['display_name'] : 'Unknown location';

            $agent = new Agent();
            $visitor = new Visitor();
            $visitor->visitor_count = 1;
            $visitor->ip = $request->ip();
            $visitor->devices = $agent->device(); // Get the device name
            $visitor->platform = $agent->platform(); // Get the platform name
            $visitor->browser = $agent->browser(); // Get the browser name
            $visitor->latitude = $request->latitude;
            $visitor->longitude = $request->longitude;
            $visitor->address = $address;

            $visitor->save();

            return response()->json([
                'message' => 'Location and address saved successfully',
                'address' => $address
            ]);
        } else {
            return response()->json(['error' => 'Failed to retrieve address'], 500);
        }
    }
}
