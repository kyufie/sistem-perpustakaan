<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    public function index () {
        $books = Book::all();
        return view('borrow', compact('books'));
    }
}
