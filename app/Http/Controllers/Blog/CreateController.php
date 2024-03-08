<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use app\Http\Controllers\Controller;
use App\Models\Blog;

class CreateController extends Controller
{
    public function create()
    {
        return view('blog/create');
    }


    public function store(Request $request)
    {
        // Xử lý logic lưu bài viết mới
        // Đầu tiên, xác thực dữ liệu đầu vào
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required',
            'description' => 'required',
            'content' => 'required',
        ]);

        // Sau đó, tạo bài viết mới
        $blog = new \App\Models\Blog;
        $blog->title = $validatedData['title'];
        $blog->image = $validatedData['image'];
        $blog->description = $validatedData['description'];
        $blog->content = $validatedData['content'];
        $blog->save();

        // Cuối cùng, chuyển hướng người dùng với một thông báo
        return redirect()->route('blog.list')->with('success', 'Bài viết đã được tạo thành công!');
    }


    public function show(Blog $blog)
    {
        return view('blog.read', compact('blog'));
    }
}
