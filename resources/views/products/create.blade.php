@extends('layouts.app')

@section('content')
    <h1>Novo Produto</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <label>Nome:</label><br>
        <input type="text" name="name"><br><br>

        <label>Preço:</label><br>
        <input type="text" name="price"><br><br>

        <label>Descrição:</label><br>
        <textarea name="description"></textarea><br><br>

        <label>Categoria:</label><br>
        <select name="category_id">
            <option value="">Selecione</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select><br><br>

        <button type="submit">Salvar</button>
    </form>
@endsection
