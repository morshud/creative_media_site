<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('contact-us', [HomeController::class, 'contact_us'])->name('contact-us');
Route::get('who-we-are', [HomeController::class, 'about_us'])->name('about-us');
Route::get('our-story', [HomeController::class, 'our_story'])->name('our-story');
Route::get('our-team', [HomeController::class, 'our_team'])->name('our-team');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('our-blog', [PostController::class, 'index'])->name('blog');
Route::get('our-blog-details/{slug}', [PostController::class, 'show'])->name('blog-details');
