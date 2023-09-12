<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }
}
