<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/books', [BookController::class, 'index'])->name('books');
Route::get('/books/search', [BookController::class, 'search'])->name('books.search');
Route::get('/books/detail/{id}', [BookController::class, 'show'])->name('book-detail');
Route::get('/borrow', [BorrowController::class, 'index'])->name('borrow');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
