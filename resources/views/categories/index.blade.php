@extends('layouts.app')

@section('content')
    <h1>Categorias</h1>

    <a href="{{ route('categories.create') }}" class="button">+ Nova Categoria</a><br /><br />

    <table border="1" cellpadding="5">
        <tr>
            <th>Nome</th>
            <th>Ações</th>
        </tr>

        @foreach($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category->id) }}">Editar</a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
