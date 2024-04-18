<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookstoreController;

Route::get('/bookstore', [BookstoreController::class, 'index'])->name('bookstore');

Route::get('/authors', [AuthorController::class, 'index'])->name('authors');

Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');

Route::post('/authors/store',  [AuthorController::class, 'store'])->name('authors.store');

Route::get('/authors/{id}/edit',  [AuthorController::class, 'edit'])->name('authors.edit');

Route::post('/authors/update/{id}',  [AuthorController::class, 'update'])->name('authors.update');

Route::get('/authors/remove/{id}',  [AuthorController::class, 'destroy'])->name('authors.remove');

Route::get('/books', [BookController::class, 'index'])->name('books');