<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::get('/all-blog/', [BlogController::class, 'index'])->name('blog.list');

// Hiển thị form tạo bài viết mới
Route::get('/create-blog/', [BlogController::class, 'create'])->name('blog.create');

// Route hiển thị form sửa bài viết
Route::get('/blog/read/id-blog={blog}/edit', [BlogController::class, 'edit'])->name('blog.edit');

// Route cập nhật bài viết
Route::put('/blog/{blog}', [BlogController::class, 'update'])->name('blog.update');

// Lưu bài viết mới
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');

// Hiển thị bài viết
Route::get('/blog/read/id-blog={blog}/', [BlogController::class, 'show'])->name('blog.read');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
