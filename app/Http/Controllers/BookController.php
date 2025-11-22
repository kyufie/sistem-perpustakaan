<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books', compact('books'));
    }
    public function search(Request $request)
    {
        $books = Book::query();

        if ($request->search) {
            $books = $books->where('title', 'like', '%' . $request->search . '%')
                ->orWhereHas('author', function ($q) use ($request) {
                    $q->where('name', 'like', '%' . $request->search . '%');
                });
        }

        $books = $books->get();

        return view('books', compact('books'));
    }

    public function show($id)
    {
        $book = Book::with(['author', 'genre'])->findOrFail($id);
        return view('detail', compact('book'));
    }
}
