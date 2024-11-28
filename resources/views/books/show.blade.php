@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $book->title }}</h1>
        <p><strong>Autore:</strong> {{ $book->author->name }}</p>
        <p><strong>Categoria:</strong> {{ $book->category->name }}</p>
        <p><strong>Descrizione:</strong> {{ $book->description ?? 'Nessuna descrizione disponibile' }}</p>
        <p><strong>Pagine:</strong> {{ $book->pages ?? 'Non specificato' }}</p>


        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline-flex; gap: 10px">
            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Modifica</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Elimina</button>
        </form>
    </div>
@endsection

