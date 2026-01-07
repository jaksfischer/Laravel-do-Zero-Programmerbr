@extends('layouts.app')

@section('content')
    <h1>Produtos</h1>

    <a href="{{ route('products.create') }}" class="button">Novo Produto</a>

    <br><br>

    <table border="1" cellpadding="5">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
            <th>Ações</th>
        </tr>

        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->category->name ?? '-' }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}">Editar</a>

                    <form action="{{ route('products.destroy', $product->id) }}"
                          method="POST"
                          style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
