<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    public function run()
    {
        Tag::create(['name' => 'Healthy', 'slug' => 'healthy']);
        Tag::create(['name' => 'Nutrition', 'slug' => 'nutrition']);
        Tag::create(['name' => 'Breakfast', 'slug' => 'breakfast']);
    }
}
