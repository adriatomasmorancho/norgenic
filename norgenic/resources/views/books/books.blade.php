@extends('layout.app')

@section('content')
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
                <a href="{{ route('authors.edit', ['id' => $book->book_id]) }}">Edit</a>
                <a href="{{ route('authors.remove', ['id' => $book->book_id]) }}">Remove</a>
            </td>
        </tr>
                @endforeach
    </tbody>
    </table>
@endsection