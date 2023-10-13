<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;

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

// Route Home
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Route about
Route::get('about', [aboutController::class, 'index'])->name('about.index');

// Route news
Route::get('news', [newsController::class, 'index'])->name('news.index');
