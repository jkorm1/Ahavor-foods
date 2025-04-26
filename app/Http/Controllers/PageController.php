<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    
    public function products()
    {
        // For now, redirect to home until products page is created
        return redirect()->route('home');
    }
    
    public function about()
    {
        // For now, redirect to home until about page is created
        return redirect()->route('home');
    }
    
    public function blog()
    {
        // For now, redirect to home until blog page is created
        return redirect()->route('home');
    }
    
    public function contact()
    {
        // For now, redirect to home until contact page is created
        return redirect()->route('home');
    }
}