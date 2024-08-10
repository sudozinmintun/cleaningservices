<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::orderBy('id', 'desc')
            ->paginate(20);
        return view('blog.index', compact('posts'));
    }


    public function show($id)
    {
        $post = Post::findOrFail($id);
        $recent_posts = Post::orderBy('id', 'desc')
            ->paginate(10);

        return view('blog.show', compact('post', 'recent_posts'));
    }
}
