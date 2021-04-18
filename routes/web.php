<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\PostController;
use App\HTTP\Controllers\ProfileController;

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

Route::get('/', function () {
    if(Auth::check()){return Redirect::to('post');}
    return view('welcome');
});

Auth::routes();

// Route::get('/post', [PostController::class, 'index'])->name('home');

Route::resource('post', PostController::class);

Route::resource('profile', ProfileController::class);

