<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserAdmin;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'index']);

// Route::get('/about', function () {
//     return view('pages.about');
// });

Route::get('/about', [PagesController::class, 'about']);

Route::resource('/posts', PostsController::class);

// Route::resource('/post', PostsController::class, 'post');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/user', [HomeController::class, 'showProfile'])->name('user');

Route::get('/edit', [HomeController::class, 'editProfile'])->name('user');

Route::put('/update/{user}', [HomeController::class, 'updateProfile']);
