@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifica Libro: {{ $book->title }}</h1>
        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description">{{ $book->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="pages" class="form-label">Numero di Pagine</label>
                <input type="number" class="form-control" id="pages" name="pages" value="{{ $book->pages }}">
            </div>

            <div class="mb-3">
                <label for="author_id" class="form-label">Autore</label>
                <select class="form-control" id="author_id" name="author_id" required>
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Categoria</label>
                <select class="form-control" id="category_id" name="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $book->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Aggiorna Libro</button>
        </form>
    </div>
@endsection
