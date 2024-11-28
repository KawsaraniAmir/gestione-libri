<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = \App\Models\Book::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->optional()->text(800),
            'pages' => $this->faker->optional()->numberBetween(50, 1000),
            'author_id' => Author::inRandomOrder()->first()->id ?? Author::factory(), // Collegamento a un autore esistente o creazione di uno nuovo
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory(), // Collegamento a una categoria esistente o creazione di una nuova
        ];
    }
}
