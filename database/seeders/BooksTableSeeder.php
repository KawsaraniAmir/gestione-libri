<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = Author::all();
        $categories = Category::all();

        // Crea 20 libri associati ad autori e categorie casuali.
        Book::factory(20)->create()->each(function ($book) use ($authors, $categories) {
            $book->author_id = $authors->random()->id;
            $book->category_id = $categories->random()->id;
            $book->save();
        });
    }
}
