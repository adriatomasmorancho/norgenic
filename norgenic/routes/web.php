<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookstoreController;

Route::get('/bookstore', [BookstoreController::class, 'index'])->name('bookstore');

Route::get('/authors', [AuthorController::class, 'index'])->name('authors');

Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');

Route::post('/authors/store',  [AuthorController::class, 'store'])->name('authors.store');

Route::get('/authors/editar/{id}',  [AuthorController::class, 'edit'])->name('productos.editar');

Route::post('/authors/guardar',  [AuthorController::class, 'update'])->name('productos.guardar');

Route::get('/authors/eliminar/{id}',  [AuthorController::class, 'destroy'])->name('productos.eliminar');

Route::get('/books', [BookController::class, 'index'])->name('books');