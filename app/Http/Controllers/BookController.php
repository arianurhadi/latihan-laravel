<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){

        $books = Book::with('category')->get();

        return view('book.index', compact('books'));
    }

    public function detail($slug){

        $book = Book::whereSlug($slug)->with(['category', 'reviews' => function ($query) {
            $query->with('user');
        }])->firstOrFail();

        return view('book.detail', compact('book'));
    }
}
