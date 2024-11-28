<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Gestione Libri') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> <!-- Link ai tuoi file CSS -->
</head>
<body>
<div id="app">
    <!-- Navbar o Menu di navigazione -->
    <nav>
        <ul>
            <li><a href="{{ route('books.index') }}">Libri</a></li>
            <li><a href="{{ route('authors.index') }}">Autori</a></li>
            <li><a href="{{ route('categories.index') }}">Categorie</a></li>
        </ul>
    </nav>

    <div class="container">
        <!-- Contenuto della pagina -->
        @yield('content')
    </div>
</div>

<footer>
    <p>&copy; {{ date('Y') }} Gestione Libri. Tutti i diritti riservati.</p>
</footer>

<script src="{{ asset('js/app.js') }}"></script> <!-- Link ai tuoi file JS -->
</body>
</html>
