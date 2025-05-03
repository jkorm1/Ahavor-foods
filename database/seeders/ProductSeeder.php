<?php

namespace Database\Seeders; 

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Premium Oats',
            'slug' => 'premium-oats',
            'description' => 'Packed with nutrients and fiber for a healthy breakfast.',
            'regular_price' => 20.00,
            'category_id' => 1,
            'image_path' => 'images/product-oats.jpg',
            'badge' => 'Best Seller',
            'sku' => 'OAT-001',
            'availability' => 'In Stock'
        ]);

        Product::create([
            'name' => 'Tom Brown Mix',
            'slug' => 'tom-brown-mix',
            'description' => 'A nutritious blend of roasted corn, millet, and groundnuts.',
            'regular_price' => 30.00,
            'category_id' => 2,
            'image_path' => 'images/product-tombrown.jpg',
            'badge' => 'New',
            'sku' => 'TB-002',
            'availability' => 'In Stock'
        ]);
    }
}
