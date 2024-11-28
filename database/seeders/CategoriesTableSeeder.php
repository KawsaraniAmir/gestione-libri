<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Romanzo'],
            ['name' => 'Saggio'],
            ['name' => 'Biografia'],
            ['name' => 'Fantascienza'],
            ['name' => 'Fantasy'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
