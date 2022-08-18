<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function blog()
    {
        return view('front.blog');
    }

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function single()
    {
        
        return view('front.single');
    }

    public function error_404()
    {
        return view('errors.404');
    }
}
