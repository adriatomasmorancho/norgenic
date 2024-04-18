@extends('layout.app')

@section('title')
<title>bookstore/authors/{{ $author['id'] }}/edit</title>
@endsection

@section('content')
    <h1>Edit Author</h1>
    <form method="POST" action="{{ route('authors.update', ['id' => $author->id]) }}" enctype="multipart/form-data">
    @csrf
    <div>
        <h3 class="login__element__h3">
            Name
        </h3>
        <input  name="name" type="text" value="{{ $author['name'] }}"></input>
                @error('name')
                    <div class="style-error">{{ $message }}</div>
                @enderror
        </div>
        <div class="create__button">
                <button class="login__element__button btn-create" id="enviar" type="submit">Sumbit</button>
            </div>

        </form>
   
@endsection