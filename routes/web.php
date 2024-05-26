<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Auth;






Route::get('/', [BlogPostController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [BlogPostController::class, 'show'])->name('blog.show');
Route::get('/create', [BlogPostController::class, 'create'])->name('blog.create');
Route::post('/store', [BlogPostController::class, 'store'])->name('blog.store');
Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
// Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
//Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/search', [BlogPostController::class, 'search'])->name('blog.search');
// Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
Route::get('/my-posts', [PostController::class, 'myPosts'])->name('posts.my');
Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications');
Route::get('/settings', [SettingController::class, 'index'])->name('settings');



// About page route
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('service');

})->name('services');

Auth::routes();

Route::post('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
