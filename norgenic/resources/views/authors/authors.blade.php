@extends('layout.app')

@section('title')
<title>bookstore/<?php echo getenv('APP_LOCALE'); ?>/authors</title>
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
    <h1>Authors</h1>
    <a class="btn btn-primary" href="{{ route('authors.create') }}">Create</a>
    <table class="table">
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
                    <a class="btn btn-primary" href="{{ route('authors.edit', ['id' => $author->id]) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('authors.remove', ['id' => $author->id]) }}">Remove</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        @endsection