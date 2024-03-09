<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use app\Http\Controllers\Controller;
use App\Models\Blog;
use Cloudinary\Api\Upload\UploadApi;

class CreateController extends Controller
{
    public function create()
    {
        return view('blog/create');
    }


    public function store(Request $request)
    {
        // Xác thực dữ liệu đầu vào 
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required',
            'description' => 'required',
            'content' => 'required',
        ]);

        // Tải hình ảnh lên Cloudinary
        $uploadedFileUrl = (new \Cloudinary\Api\Upload\UploadApi())->upload($request->file('image')->getRealPath(), [
            'folder' => 'user-image/'
        ]);
        // Tạo bài viết mới
        $blog = new \App\Models\Blog;
        $blog->title = $validatedData['title'];
        $blog->image = $uploadedFileUrl['url']; // Lưu URL hình ảnh từ Cloudinary
        $blog->description = $validatedData['description'];
        $blog->content = $validatedData['content'];
        $blog->save();
         // "url": "http://res.cloudinary.com/akuroblog/image/upload/v1709957310/user-image/dwcf3pukmbwxnhji112j.png"
        // Cuối cùng, chuyển hướng người dùng với một thông báo
        return redirect()->route('blog.list')->with('success', 'Bài viết đã được tạo thành công!');
    }

    public function show(Blog $blog)
    {
        return view('blog.read', compact('blog'));
    }
}
