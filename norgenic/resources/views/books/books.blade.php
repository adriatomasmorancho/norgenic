@extends('layout.app')

@section('title')
<title>bookstore/books</title>
@endsection

@section('content')
@if(Session::has('message'))
<p>{{Session::get('message')}}</p>
@endif
    <h1>Books</h1>
    <a href="{{ route('books.create') }}">Create</a>
    <table>
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
                <a href="{{ route('books.edit', ['id' => $book->book_id]) }}">Edit</a>
                <a href="{{ route('books.remove', ['id' => $book->book_id]) }}">Remove</a>
            </td>
        </tr>
                @endforeach
    </tbody>
    </table>
@endsection