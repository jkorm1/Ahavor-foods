<?php

namespace Database\Seeders; 

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Oat Products', 'slug' => 'oat-products']);
        Category::create(['name' => 'Tom Brown', 'slug' => 'tom-brown']);
        Category::create(['name' => 'Cereal Mixes', 'slug' => 'cereal-mixes']);
    }
}
