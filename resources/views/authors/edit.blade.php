@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifica Autore</h1>
        <form action="{{ route('authors.update', $author->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome dell'Autore</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $author->name) }}" required>
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="birthday">Data di Nascita</label>
                <input type="date" name="birthday" id="birthday" class="form-control" value="{{ old('birthday', $author->birthday) }}">
                @error('birthday')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-warning">Salva Modifiche</button>
            <a href="{{ route('authors.index') }}" class="btn btn-secondary">Annulla</a>
        </form>
    </div>
@endsection
