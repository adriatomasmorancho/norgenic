@extends('layout.app')

@section('title')
<title>bookstore/<?php echo getenv('APP_LOCALE'); ?>/books/create</title>
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
    <h1>Add new Book</h1>
    <form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col">
        </div>
        <div class="col-md-6"> 
        <label for="title">Title</label>
        <input  name="title" type="text" class="form-control @error('title') is-invalid @enderror"></input>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        <label for="author">Author</label>
        <select name="author" class="form-control @error('author') is-invalid @enderror">
            <option value = ""> Select author</option>
            @foreach ($authors as $key => $author)
            <option value="{{ $author['id'] }}">{{ $author['name'] }}</option>
            @endforeach
        </select>
                @error('author')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <button class="btn btn-primary mt-3" type="submit">Sumbit</button>
                </div>
        <div class="col">
        </div>
    </div>
</form>
@endsection