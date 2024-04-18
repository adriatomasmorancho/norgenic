@extends('layout.app')

@section('content')
    <h1>Edit Book</h1>
    <form method="POST" action="{{ route('books.update', ['id' => $book->id]) }}" enctype="multipart/form-data">
    @csrf
    <div>
        <h3 class="login__element__h3">
            Title
        </h3>
        <input  name="title" type="text" value="{{ $book['title'] }}"></input>
                @error('title')
                    <div class="style-error">{{ $message }}</div>
                @enderror
        </div>
        <div>
        <h3 class="login__element__h3">
            Author
        </h3>
        <select name="author">
            <option value = ""> Select author</option>
            @foreach ($authors as $key => $author)
            @if ($author['id'] == $book['author_id'])
            <option selected value="{{ $author['id'] }}">{{ $author['name'] }}</option>
            @else
            <option value="{{ $author['id'] }}">{{ $author['name'] }}</option>
            @endif
            @endforeach
        </select>
                @error('author')
                    <div class="style-error">{{ $message }}</div>
                @enderror
        </div>
        <div class="create__button">
                <button class="login__element__button btn-create" id="enviar" type="submit">Sumbit</button>
            </div>

        </form>
   
@endsection