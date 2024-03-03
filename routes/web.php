<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\BlogController as FrontBlogController;
use App\Http\Controllers\Front\ContactController as FrontContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\RegisterController;
use App\Http\Controllers\Front\ServiceController as FrontServiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UsersController;
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

Route::get('/', [HomeController::class, 'index'])->name('front.home.index');
Route::get('about', [AboutController::class, 'index'])->name('front.about.index');
Route::get('services', [FrontServiceController::class, 'index'])->name('front.service.index');
Route::get('blog', [FrontBlogController::class, 'index'])->name('front.blog.index');
Route::get('blog/{id}', [FrontBlogController::class, 'show'])->name("front.blog.show");
Route::get('contact', [FrontContactController::class, 'index'])->name('front.contact.index');
Route::post('contact', [FrontContactController::class, 'store'])->name('front.contact.store');

Route::get('register', [RegisterController::class, 'index'])->name('register.index');
Route::post('register', [RegisterController::class, 'store'])->name('register.action');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'action'])->name('login.action');
Route::post('logout', [LoginController::class, 'logout'])->name('auth.logout');

// ===== ADMIN =====
Route::group(['middleware' => ['auth', 'guest_not_admin']], function () {
    Route::prefix('/admin')->group(function () {
        Route::resource('dashboard', DashboardController::class)->middleware('guest_not_admin');

        Route::resource('blog', BlogController::class);
        Route::post('blog/table', [BlogController::class, 'table'])->name("blog.table");

        Route::resource('service', ServiceController::class);
        Route::post('service/table', [ServiceController::class, 'table'])->name("service.table");

        Route::resource('users', UsersController::class);
        Route::post('users/table', [UsersController::class, 'table'])->name("users.table");

        Route::resource('contact', ContactController::class);
        Route::post('contact/table', [ContactController::class, 'table'])->name("contact.table");
    });
});
