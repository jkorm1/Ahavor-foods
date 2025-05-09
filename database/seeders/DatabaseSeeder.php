<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ProductSeeder::class,
            CategorySeeder::class,
            PostSeeder::class,
            TagSeeder::class,
            FAQSeeder::class,
            TeamMemberSeeder::class,
        ]);
    }
}
