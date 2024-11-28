@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Elenco Autori</h1>
        <a href="{{ route('authors.create') }}" class="btn btn-primary mb-3">Aggiungi Autore</a>

        <table class="table">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Data di Nascita</th>
                <th>Azioni</th>
            </tr>
            </thead>
            <tbody>
            @foreach($authors as $author)
                <tr>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->birthday ?? 'Non disponibile' }}</td>
                    <td>

                        <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline-flex; gap: 10px">
                            <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning">Modifica</a>
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
