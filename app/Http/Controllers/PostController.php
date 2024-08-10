<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('admin.post.index', ['posts' => $posts]);
    }

    public function addedit($id = 0)
    {
        $post = [];
        if (!empty($id)) {
            $post = Post::findOrFail($id);
        }
        return view('admin.post.addedit', ['id' => $id, 'post' => $post]);
    }

    public function add(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = new Post;

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);

        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = $file_name;

        $post->save();
        return redirect()->route('admin.post')->with('success', 'Post created successfully.');
    }

    public function edit(Request $request)
    {

        $id = $request->id;

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = Post::findOrFail($id);

        if (!empty($request->has('image'))) {
            $file_name = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $file_name);
            $post->image = $file_name;
        }

        $post->title = $request->title;
        $post->description = $request->description;

        $post->save();
        return redirect()->route('admin.post')->with('success', 'Post updated successfully.');
    }

    public function delete($id)
    {
        Post::findOrFail($id)
            ->delete();
        return redirect()->route('admin.post')->with('success', 'Post deleted successfully.');
    }
}
