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
//display all user blog
Route::get('/blog/manage', [BlogController::class, 'manage'])->middleware('auth');
//show edit blog for authenticated user
Route::get('/blog/{blog}/edit', [BlogController::class, 'edit'])->middleware('auth');
//Update blog for authenticated user
Route::put('/blog/{blog}', [BlogController::class, 'update'])->middleware('auth');
//Delete blog for authenticated user
Route::delete('/blog/{blog}', [BlogController::class, 'destroy'])->middleware('auth');
//show single blog
Route::get('/blog/{blog}', [BlogController::class, 'show']);


/**
 * Users Route
 */
//display registration form
Route::get('/register', [UserController::class, 'register'])->middleware('guest');
//display login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
//logout authenticated user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
//register new user
Route::post('/users/registration', [UserController::class, 'store']);
//authenticate user
Route::post('/users/authentication', [UserController::class, 'authenticate']);

