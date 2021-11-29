<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $books = Book::simplepaginate(5);
        return view('index', ['books' => $books, 'categories' => $categories]);
    }

    public function filter($category)
    {
        $categories = Category::all();
        $category = Category::where('category', $category);
        $books = Category::find($category->value('id'))->books()->get();
        return view('filter', ['books' => $books, 'categories' => $categories, 'current' => $category->value('category')]);
    }

    public function show($id)
    {
        $categories = Category::all();
        $book = Book::where('id', '=', $id)->first();
        return view('show', ['book' => $book, 'categories' => $categories]);
    }

    public function contact()
    {
        $categories = Category::all();
        return view('contact', ['categories' => $categories]);
    }
}
