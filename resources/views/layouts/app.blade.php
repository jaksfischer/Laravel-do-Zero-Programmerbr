<!DOCTYPE html>
<html>
<head>
    <title>CRUD Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<header class="header">
    <h1>CRUD Laravel</h1>
</header>

<nav class="menu">
    <ul>
        <li><a href="{{ route('products.index') }}">Home</a></li>

        <li class="dropdown">
            <span>Produtos</span>
            <ul class="submenu">
                <li><a href="{{ route('products.create') }}">Cadastrar</a></li>
                <li><a href="{{ route('products.index') }}">Listar</a></li>
            </ul>
        </li>

        <li class="dropdown">
            <span>Categorias</span>
            <ul class="submenu">
                <li><a href="{{ route('categories.create') }}">Cadastrar</a></li>
                <li><a href="{{ route('categories.index') }}">Listar</a></li>
            </ul>
        </li>
    </ul>
</nav>

<main class="content">
    @yield('content')
</main>

</body>
</html>
