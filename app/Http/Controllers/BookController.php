<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // Get all books and categories, then render index view
    }

    public function filter($category)
    {
        // Get books based on category and categories and render category view
    }

    public function show(Book $book)
    {
        // Get books detail info and render show book view
    }

    public function contact()
    {
        // Return contact view
    }
}
