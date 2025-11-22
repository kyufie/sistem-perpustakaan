<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/books', [BookController::class, 'index'])->name('books');
Route::get('/books/detail/', [BookController::class, 'show'])->name('book-detail');
Route::get('/borrow', [BorrowController::class, 'index'])->name('borrow');
Route::get('/profile', [HomeController::class, 'index'])->name('profile');
