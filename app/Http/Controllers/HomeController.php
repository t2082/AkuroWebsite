<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
        $blog = Blog::latest()->take(6)->get();
        return view('home', compact('blog'));
    }
}
