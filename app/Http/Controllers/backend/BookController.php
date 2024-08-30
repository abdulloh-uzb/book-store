<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Format;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBookRequest;
class BookController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission: create book', ["only"=> ['create', 'store']]);
        $this->middleware('permission: edit book', ["only"=> ['update', 'edit']]);
        $this->middleware('role: admin, seller', ["except"=> ['index', 'store']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(10);
        return view("backend.books.list", compact("books"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $formats = Format::all();
        $authors = Author::all();
        $languages = Language::all();
        return view("backend.books.create", compact("categories", "formats", "authors", "languages"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $book = $request->validated();
        $book['user_id'] = 1;
        Book::create($book);
        return redirect()->route("backend.book.list");
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view("backend.books.view", compact("book"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view("books.edit", compact("book"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
