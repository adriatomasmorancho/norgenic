@extends('layout.app')

@section('content')
    <h1>Add new Author</h1>
    <form method="POST" action="{{ route('authors.store') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <h3 class="login__element__h3">
            Name
        </h3>
        <input  name="name" type="text"></input>
                @error('name')
                    <div class="style-error">{{ $message }}</div>
                @enderror
        </div>
        <div class="create__button">
                <button class="login__element__button btn-create" id="enviar" type="submit">Sumbit</button>
            </div>

        </form>
   
@endsection