<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::showBooks();
        return view('books.books',  compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::showAuthors();
        return view('books.create', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'author' => 'required',
        ], [
            'author.required' => 'The selected author id is invalid',
        ]);

        Book::insertBooks($request->input('title'),$request->input('author'));

        Session::flash('message', "Book created!");

        return redirect()->route('books.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::searchBooks($id);

        $authors = Author::showAuthors();

        return view('books.edit',  compact('book', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string',
            'author' => 'required',
        ], [
            'author.required' => 'The selected author id is invalid',
        ]);
    
        Book::updateBooks($request->input('title'),$request->input('author'), $id);

        Session::flash('message', "Book edited!");

        return redirect()->route('books.edit', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Book::removeBooks($id);

        Session::flash('message', "Book deleted!");

        return redirect()->route('books');
    }
}
