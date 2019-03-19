<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
class PostController extends Controller
{
    //
    public function index(){
        $post = new \App\Post;
        $posts = $post::all();
        return view("posts.index",compact('posts'));
    }
    public function create(){
        return view("posts.create_post");
    }
    public function store(){
        $post = new \App\Post;
        $post->subject = request('subject');
        $post->message = request('message');
        $post->save();
        return redirect("/posts");
    }
}
