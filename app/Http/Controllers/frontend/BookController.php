<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Book;

class BookController extends Controller
{
    public function view(Book $book)
    {
        return view("frontend.books.view", compact("book"));
    }

    public function list()
    {
        return view("frontend.books.list");
    }
}
