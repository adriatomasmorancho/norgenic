@extends('layout.app')

@section('content')
    <h1>Authors</h1>
    <a href="{{ route('authors.create'}}">Create</a>
    <table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
            @foreach ($authors as $key => $author)
        <tr>
            <td>{{ $author['id'] }}</td>
            <td>{{ $author['name'] }}</td>
            <td>
                <a href="{{ route('shop.index', ['nombre' => auth()->user()->shop_url]) }}">Edit</a>
                <a href="{{ route('shop.index', ['nombre' => auth()->user()->shop_url]) }}">Remove</a>
            </td>
        </tr>
                @endforeach

        <!-- Puedes agregar más filas según sea necesario -->
    </tbody>
    </table>
@endsection