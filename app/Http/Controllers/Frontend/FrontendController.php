<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('frontend.home.index', compact('posts'));
    }

    public function postDetails($id)
    {
        $postDetail = Post::find($id);
        return view('frontend.home.post-details', compact('postDetail'));
    }
    public function postComment(Request $request, $id)
    {
        Comment::create([
         'post_id' => $id,
         'name' => $request->name,
         'message' => $request->message
     ]);

     return redirect()->back();
    }
}
