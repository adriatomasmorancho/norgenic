@extends('layout.app')

@section('title')
<title>bookstore/authors/{{ $author['id'] }}/edit</title>
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
    <h1>Edit Author</h1>
    <form method="POST" action="{{ route('authors.update', ['id' => $author->id]) }}" enctype="multipart/form-data">
    @csrf
    <div class="container">
    <label for="name">Name</label>
        <input  name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $author['name'] }}"></input>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        <button class="btn btn-primary mt-3" type="submit">Submit</button>
    </div>
    </form>
   
@endsection