@extends('layout.app')

@section('title')
<title>bookstore/authors/create</title>
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
    <h1>Add new Author</h1>
    <form method="POST" action="{{ route('authors.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <label for="name">Name</label>
        <input name="name" id="name" class="form-control @error('name') is-invalid @enderror" type="text">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <button class="btn btn-primary mt-3" type="submit">Submit</button>
    </div>
</form>
@endsection