<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('detail')->simplepaginate(5);
        return view('index', ['books' => $books]);
    }

    public function filter($category)
    {
        $category_id = Category::where('category', 'LIKE', $category)->value('id');
        $books = Category::find($category_id)->books()->get();
        return view('filter', ['books' => $books]);
    }

    public function show($id)
    {
        $book = Book::with('detail')->where('id', '=', $id)->first();
        return view('show', ['book' => $book]);
    }

    public function contact()
    {
        // Return contact view
    }
}
