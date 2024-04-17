@extends('layout.app')

@section('content')
    <h1>Add new Author</h1>
    <form method="POST" action="{{ route('authors.store') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <h3 class="login__element__h3">
            Name
        </h3>
        <input  name="name" type="text" value="{{ old('name') }}"></input>
                @error('name')
                    <div class="style-error">{{ $message }}</div>
                @enderror
        </div>
        <div class="create__button">
                <a class="login__element__button__atras btn-create"
                    href="{{ route('shop.index', ['nombre' => auth()->user()->shop_url]) }}">Volver</a>
                <button class="login__element__button btn-create" id="enviar" type="submit">Crear</button>
            </div>

        </form>
   
@endsection