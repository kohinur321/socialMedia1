<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
   public function addPost()
   {
   $categories = Category::orderBy('id', 'desc')->get();
    return view('backend.includes.pages.post.add', compact('categories'));

   }
   public function postStore(Request $request)
   {
    $this->validate($request, [
     'title'=> 'required',
      'cat_id' => 'required',
      'short_description' => 'required',
      'long_description' => 'required',
      'image' => 'required',
    ]);

    $imageName = time() .'.'. $request->image->extension();
    $request->image->move('post/', $imageName);

    Post::create([
       'title' => $request->title,
       'slug' => Str::slug($request->title),
       'cat_id' => $request->cat_id,
       'short_description' => $request->short_description,
       'long_description' => $request->long_description,
       'image' => $imageName,
    ]);

    return redirect()->back()->with('success','Post has been created');
   }

   public function managePost()
   {
    $posts = Post::orderBy('id','desc')->get();
    return view('backend.includes.pages.post.manage', compact('posts'));
   }

   public function postEdit($id)
   {
     $post = Post::find($id);
     $categories = Category::orderBy('id', 'desc')->get();
    return view('backend.includes.pages.post.edit', compact('post', 'categories'));
   }

   public function postUpdate(Request $request, $id)
   {
     $this->validate($request, [
        'title'=> 'required',
         'cat_id' => 'required',
         'short_description' => 'required',
         'long_description' => 'required',

       ]);

       $post = Post::find($id);

       if($request->hasFile('image')){
        if($post->image && file_exists('post/'.$post->image)){
            unlink('post/'.$post->image);
           }
           $imageName = time() .'.'. $request->image->extension();
        $request->image->move('post/', $imageName);
        $post->image = $imageName;
       }
    $post->update([
        'title'=> $request->title,
       'slug'=> Str::slug($request->title),
       'cat_id'=> $request->cat_id,
       'short_description'=> $request->short_description,
       'long_description'=> $request->long_description,
    ]);

    return redirect()->back()->with('success','Post has been updated');
   }

   public function postDelete($id)
   {
    $post = Post::find($id);
    $post->delete();
    return redirect()->back()->with('success','Post has been deleted');

   }
}
