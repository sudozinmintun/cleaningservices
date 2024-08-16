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

        return view('welcome', compact('galleries'));
    }
}
