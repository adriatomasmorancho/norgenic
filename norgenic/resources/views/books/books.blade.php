@extends('layout.app')

@section('title')
<title>bookstore/books</title>
@endsection

@section('content')
@if(Session::has('message'))
<div class="row">
    <div class="col ml-3 mt-3 alert alert-success">
        <p>{{Session::get('message')}}</p>
    </div>
    <div class="col">
    </div>
    <div class="col">
    </div>
</div>
@endif
<div class="p-2">
    <h1>Books</h1>
    <a class="btn btn-primary" href="{{ route('books.create') }}">Create</a>
    <table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Author</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
            @foreach ($books as $key => $book)
        <tr>
            <td>{{ $book['book_id'] }}</td>
            <td>{{ $book['title'] }}</td>
            <td>{{ $book['author'] }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('books.edit', ['id' => $book->book_id]) }}">Edit</a>
                <a class="btn btn-danger" href="{{ route('books.remove', ['id' => $book->book_id]) }}">Remove</a>
            </td>
        </tr>
                @endforeach
    </tbody>
    </table>
</div>
@endsection