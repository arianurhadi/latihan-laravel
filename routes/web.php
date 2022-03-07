<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
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
Route::get('/book', [BookController::class, 'index'])->name('book');
Route::get('/book-detail/{slug}', [BookController::class, 'detail'])->name('book.detail');
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/category-detail/{id}', [CategoryController::class, 'detail'])->name('category.detail');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/student', [StudentController::class, 'index'])->name('student');