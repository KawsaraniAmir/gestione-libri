<!-- resources/views/authors/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Aggiungi un Nuovo Autore</h1>

        <!-- Form per creare un nuovo autore -->
        <form action="{{ route('authors.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome Completo:</label>
                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="birthday">Data di Nascita:</label>
                <input type="date" id="birthday" name="birthday" class="form-control @error('birthday') is-invalid @enderror" value="{{ old('birthday') }}">
                @error('birthday')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi Autore</button>
            <a href="{{ route('authors.index') }}" class="btn btn-secondary">Annulla</a>
        </form>
    </div>
@endsection
