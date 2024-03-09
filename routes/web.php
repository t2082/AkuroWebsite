<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Blog\ListController;
use App\Http\Controllers\Blog\CreateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class, 'index']);

Route::get('/blog/list/', [ListController::class, 'index'])->name('blog.list');

// Hiển thị form tạo bài viết mới
Route::get('/blog/create/', [CreateController::class, 'create'])->name('blog.create');

// Lưu bài viết mới
Route::post('/blog/store', [CreateController::class, 'store'])->name('blog.store');

// Hiển thị bài viết
Route::get('/blog/read/{blog}/', [CreateController::class, 'show'])->name('blog.read');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
