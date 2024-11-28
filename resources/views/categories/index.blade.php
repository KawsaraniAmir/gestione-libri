@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Elenco Categorie</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Aggiungi Categoria</a>

        <table class="table">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Descrizione</th>
                <th>Azioni</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description ?? 'Non disponibile' }}</td>
                    <td>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline-flex; gap: 10px">
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Modifica</a>
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
