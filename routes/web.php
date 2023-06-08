<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
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
//load blog page
Route::get('/', [BlogController::class, 'index']);
//show form to create a blog
Route::get("/blog/create", [BlogController::class, 'create'])->middleware('auth');
//submit new blog
Route::post('/blog/new', [BlogController::class, 'store'])->middleware('auth');
//show single blog
Route::get('/blog/{blog}', [BlogController::class, 'show']);


/**
 * Users Route
 */
Route::get('/register', [UserController::class, 'register'])->middleware('guest');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::post('/users/registration', [UserController::class, 'store']);
Route::post('/users/authentication', [UserController::class, 'authenticate']);

