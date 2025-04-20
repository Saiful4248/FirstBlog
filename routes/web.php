<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\fileUploadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\SettingController;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Auth\LoginController;

// use Illuminate\Http\Request;
//use App\Http\Controllers\ProfileController;







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

// json format route
// Route::get('/api/posts', [BlogPostController::class, 'getPostsJson']);

// Profile Route

Route::group(['middleware' => ['auth']], function () {
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('profile/update-picture', [ProfileController::class, 'updateProfilePicture'])->name('profile.update_picture');
    Route::post('profile/delete-picture', [ProfileController::class, 'deleteProfilePicture'])->name('profile.delete_picture');
    Route::get('profile/edit', [ProfileController::class, 'editProfile'])->name('profile.edit');
    Route::post('profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
    
});

//Login/Logout Route

// Route::post('login', [LoginController::class, 'login']);
// Route::post('logout', [LoginController::class, 'logout'])->name('logout');



// Storage Route
Route::get('/file', [fileUploadController::class,'index']);
Route::post('/file/store', [fileUploadController::class,'store'])->name('store');
// Mail Route
Route::get('/sendEmail', [SendMailController::class, 'index'])->name('sendEmail');

// Route::get('get-all-session',function () {
//     $session = session()->all();
   
// });
// Route::get('set-session', function (Request $request) {
//     $request->session()->put('user_name', 'InsperationHub');
//     $request->session()->put('user_id', '1234');
//     return redirect('get-all-session');
// });
// Route::get('destroy-session', function () {
//     session()->forget('user_id');
//     return redirect('get-all-session');
// });
// About page route
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('service');

})->name('services');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
