<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function index(){
        $post = Post::all()->last();
        return view('pages.index')->with('post', $post);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }
}
