<?php

use App\Http\Controllers\BlogController;
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
//create a blog
Route::get("/blog/create", [BlogController::class, 'create']);
//show single blog
Route::get('/blog/show', [BlogController::class, 'show']);

