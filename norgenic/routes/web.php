<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookstoreController;

Route::get('/bookstore', [BookstoreController::class, 'index'])->name('bookstore');

Route::get('/bookstore/authors', [AuthorController::class, 'index'])->name('authors');

Route::get('/bookstore/authors/create', [AuthorController::class, 'create'])->name('authors.create');

Route::post('/bookstore/authors/store',  [AuthorController::class, 'store'])->name('authors.store');

Route::get('/bookstore/authors/{id}/edit',  [AuthorController::class, 'edit'])->name('authors.edit');

Route::post('/bookstore/authors/update/{id}',  [AuthorController::class, 'update'])->name('authors.update');

Route::get('/bookstore/authors/remove/{id}',  [AuthorController::class, 'destroy'])->name('authors.remove');

Route::get('/bookstore/books', [BookController::class, 'index'])->name('books');

Route::get('/bookstore/books/create', [BookController::class, 'create'])->name('books.create');

Route::post('/bookstore/books/store',  [BookController::class, 'store'])->name('books.store');

Route::get('/bookstore/books/{id}/edit',  [BookController::class, 'edit'])->name('books.edit');

Route::post('/bookstore/books/update/{id}',  [BookController::class, 'update'])->name('books.update');

Route::get('/bookstore/books/remove/{id}',  [BookController::class, 'destroy'])->name('books.remove');