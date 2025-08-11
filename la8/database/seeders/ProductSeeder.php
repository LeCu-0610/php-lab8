<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'iPhone 15 Pro',
            'description' => 'Latest iPhone with advanced features',
            'price' => 999.99,
            'quantity' => 50,
            'image' => 'iphone15pro.jpg',
            'is_active' => true,
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S24',
            'description' => 'Premium Android smartphone',
            'price' => 899.99,
            'quantity' => 30,
            'image' => 'galaxys24.jpg',
            'is_active' => true,
        ]);

        Product::create([
            'name' => 'MacBook Pro M3',
            'description' => 'Powerful laptop for professionals',
            'price' => 1999.99,
            'quantity' => 20,
            'image' => 'macbookpro.jpg',
            'is_active' => true,
        ]);

        Product::create([
            'name' => 'iPad Air',
            'description' => 'Versatile tablet for work and play',
            'price' => 599.99,
            'quantity' => 40,
            'image' => 'ipadair.jpg',
            'is_active' => true,
        ]);

        Product::create([
            'name' => 'AirPods Pro',
            'description' => 'Wireless earbuds with noise cancellation',
            'price' => 249.99,
            'quantity' => 100,
            'image' => 'airpodspro.jpg',
            'is_active' => true,
        ]);
    }
}
