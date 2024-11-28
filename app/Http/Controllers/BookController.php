<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Visualizza tutti i libri
    public function index()
    {
        $books = Book::all(); // Ottieni tutti i libri
        return view('books.index', compact('books')); // Restituisci la view index con i libri
    }

    // Crea un nuovo libro
    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('books.create', compact('authors', 'categories')); // Restituisci la view di creazione libro
    }

    // Salva un nuovo libro
    public function store(Request $request)
    {
        $book = Book::create($request->all());
        return redirect()->route('books.index'); // Redirigi alla lista dei libri
    }

    // Mostra i dettagli di un libro
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', compact('book')); // Restituisci i dettagli del libro
    }

    // Modifica un libro
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $authors = Author::all();
        $categories = Category::all();
        return view('books.edit', compact('book', 'authors', 'categories')); // Modifica il libro
    }

    // Aggiorna un libro
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());
        return redirect()->route('books.index'); // Redirigi alla lista dei libri
    }

    // Elimina un libro
    public function destroy($id)
    {
        Book::findOrFail($id)->delete();
        return redirect()->route('books.index'); // Redirigi alla lista dei libri dopo l'eliminazione
    }
}
