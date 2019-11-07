<?php

namespace App\Http\Controllers;

use App\Post;
use View;
use Illuminate\Support\Facades\Input;



class PostController extends Controller
{
    public function postAdd()
    {
        $post = new Post();

        $post->title = Input::get('title');
        $post->link = Input::get('link');
        $post->category = Input::get('category');
        $post->save();

        return redirect()->route('index');
    }

    public function getAdd()
    {
         return View::make('addPost');
    }

    public function get()
    {
        $posts = Post::all()->sortByDesc('created_at')->sortByDesc('updated_at'); 
        return View::make('index')->with('posts',$posts);
    }

    public function delete($id) {
        $post = Post::find($id);
        $post->delete($id);
        return back()->with('sucess','Delete sucessfully!');
    }

    public function getUpdate($id){
        $post = Post::find($id);
        return View::make('updatePost')->with('post',$post);
    }

    public function postUpdate($id)
    {
        $post = Post::find($id);

        $post->title = Input::get('title');
        $post->link = Input::get('link');
        $post->category = Input::get('category');
        $post->save();
        
        return redirect()->route('index');
    }
    
}
