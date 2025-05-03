<?php 

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        if (!Post::where('slug', 'healthy-breakfast-ideas')->exists()) {
            Post::create([
                'title' => 'Healthy Breakfast Ideas',
                'slug' => 'healthy-breakfast-ideas',
                'excerpt' => 'Start your day right with these nutritious breakfast recipes.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                'image_path' => 'images/blog/breakfast.jpg',
                'category_id' => 1,
                'author_id' => 1,
            ]);
        }

        if (!Post::where('slug', 'benefits-of-whole-grains')->exists()) {
            Post::create([
                'title' => 'Benefits of Whole Grains',
                'slug' => 'benefits-of-whole-grains',
                'excerpt' => 'Discover why whole grains are essential for a healthy diet.',
                'content' => 'Whole grains provide essential nutrients like fiber and protein...',
                'image_path' => 'images/blog/grains.jpg',
                'category_id' => 2,
                'author_id' => 1,
            ]);
        }
    }
}
