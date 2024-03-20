<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("login", [AuthController::class,"login"])->name("login");
Route::get("register", [AuthController::class,"register"])->name("register");
Route::post("register", [AuthController::class,"register_store"])->name('register.store');
Route::post("authenticate", [AuthController::class,"authenticate"])->name('authenticate');
Route::post('logout', [AuthController::class,'logout'])->name('logout');

Route::post('comments', [CommentController::class,'store'])->name('comments.store');

Route::resource('posts', PostController::class);

Route::get('/', [SiteController::class,'index'])->name('home'); 
Route::get('about', [SiteController::class, "about"])->name("about");
Route::get('contact', [SiteController::class, "contact"])->name("contact");
Route::get('project', [SiteController::class, "project"])->name("project");
Route::get('service', [SiteController::class, "service"])->name("service");

