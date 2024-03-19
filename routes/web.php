<?php

use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class,'index'])->name('home'); 
Route::get('about', [SiteController::class, "about"])->name("about");
Route::get('contact', [SiteController::class, "contact"])->name("contact");
Route::get('project', [SiteController::class, "project"])->name("project");
Route::get('service', [SiteController::class, "service"])->name("service");
