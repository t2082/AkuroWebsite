<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use app\Http\Controllers\Controller;
use App\Models\Blog;

class ListController extends Controller
{
    public function index()
    {
        $blog = Blog::all(); // Lấy tất cả bài viết
        return view('blog/list', compact('blog'));
        // return view('blog/list');
    }


}
