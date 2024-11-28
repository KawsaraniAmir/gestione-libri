@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Aggiungi Nuova Categoria</h1>

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Nome Categoria</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Salva</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-3">Annulla</a>
        </form>
    </div>
@endsection
