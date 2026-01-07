@extends('layouts.app')

@section('content')
    <h1>Editar Categoria</h1>

    @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label><br />
        <input type="text" name="name" value="{{ $category->name }}"><br /><br />

        <button type="submit">Atualizar</button>
    </form>
@endsection
