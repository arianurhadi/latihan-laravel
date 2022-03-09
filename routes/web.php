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

//book routes
Route::get('/book', [BookController::class, 'index'])->name('book');
Route::get('/book-detail/{slug}', [BookController::class, 'detail'])->name('book.detail');

//category routes
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/category-detail/{id}', [CategoryController::class, 'detail'])->name('category.detail');

//student routes
Route::get('/student', [StudentController::class, 'index'])->name('student');
Route::get('/student-detail/{id}', [StudentController::class, 'detail'])->name('student.detail');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');
Route::delete('/student/delete/{user}', [StudentController::class, 'delete'])->name('student.delete');
Route::get('/student/edit/{student}', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/student/update/{student}', [StudentController::class, 'update'])->name('student.update');
