<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portfolio::insert([
            [
                'img' => 'storage/portfolio-assets/app-1.jpg',
                'filter' => 'app',
            ],
            [
                'img' => 'storage/portfolio-assets/app-2.jpg',
                'filter' => 'app',
            ],
            [
                'img' => 'storage/portfolio-assets/books-1.jpg',
                'filter' => 'app',
            ],
            [
                'img' => 'storage/portfolio-assets/books-2.jpg',
                'filter' => 'app',
            ],
            [
                'img' => 'storage/portfolio-assets/books-3.jpg',
                'filter' => 'app',
            ],
            [
                'img' => 'storage/portfolio-assets/branding-2.jpg',
                'filter' => 'app',
            ],
            [
                'img' => 'storage/portfolio-assets/branding-3.jpg',
                'filter' => 'app',
            ],
            [
                'img' => 'storage/portfolio-assets/product-1.jpg',
                'filter' => 'app',
            ],
            [
                'img' => 'storage/portfolio-assets/product-2.jpg',
                'filter' => 'app',
            ],
        ]);
    }
}
