<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $post = \DB::table('posts')->get();
        return view('posts', ['posts' => $post]);
    }

    public function show(){
        return 'this is it.';
    }
}
