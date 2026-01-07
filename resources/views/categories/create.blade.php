@extends('layouts.app')

@section('content')
    <h1>Nova Categoria</h1>

    @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <label>Nome:</label><br />
        <input type="text" name="name"><br /><br />

        <button type="submit">Salvar</button>
    </form>
@endsection
