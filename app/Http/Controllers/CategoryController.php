<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::all();
        $bgCallouts = array("bs-callout-primary", "bs-callout-success", "bs-callout-warning", "bs-callout-danger");

        return view('category.index', compact('categories', 'bgCallouts'));
    }

    public function detail($id){

        $category = Category::whereId($id)->firstOrFail();
        $books = Book::whereCategoryId($id)->get();

        return view('category.detail', compact('books', 'category'));
    }

}
