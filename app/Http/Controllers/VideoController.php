<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideo;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(Request $request)
    {
        $videos = Video::all();

        return view('admin.video.index', compact('videos'));
    }


    public function create()
    {
        return view('admin.video.create');
    }


    public function store(StoreVideo $request)
    {

        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $video_path = $video->store('public/videos');
        }

        $video = new Video();
        $video->title = $request->title;
        $video->video = $video_path ?? '';
        $video->save();

        return redirect()->back()->with('success', 'Your processing has been completed.');
    }


    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }
}
