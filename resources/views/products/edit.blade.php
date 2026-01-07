@extends('layouts.app')

@section('content')
    <h1>Editar Produto</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label><br>
        <input type="text" name="name" value="{{ $product->name }}"><br><br>

        <label>Preço:</label><br>
        <input type="text" name="price" value="{{ $product->price }}"><br><br>

        <label>Descrição:</label><br>
        <textarea name="description">{{ $product->description }}</textarea><br><br>

        <label>Categoria:</label><br>
        <select name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}"
                    {{ $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select><br><br>

        <button type="submit">Atualizar</button>
    </form>
@endsection
