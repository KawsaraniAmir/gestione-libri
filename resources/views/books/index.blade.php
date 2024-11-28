@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Elenco dei Libri</h1>
        <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Aggiungi Nuovo Libro</a>

        <table class="table">
            <thead>
            <tr>
                <th>Titolo</th>
                <th>Autore</th>
                <th>Categoria</th>
                <th>Azioni</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author->name }}</td>
                    <td>{{ $book->category->name }}</td>
                    <td>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline-flex; gap: 10px">
                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-info">Visualizza</a>
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Modifica</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
