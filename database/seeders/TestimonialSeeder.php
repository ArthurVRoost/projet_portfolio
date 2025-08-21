<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::insert([
            [
                'comment' => 'Proin iaculis purus consequat sem cure digni ssim donec porttora entum suscipit rhoncus. Accusantium quam ultrices eget id, aliquam eget nihh et. Maecan aliquam, risus at semper.',
                'img' => 'storage/portfolio-assets/testimonials-1.jpg',
                'name' => 'Brandon Walch',
                'positions' => 'CEO &amp; Founder',
            ],
            [
                'comment' => 'Proin iaculis purus consequat sem cure digni ssim donec porttora entum suscipit rhoncus. Accusantium quam ultrices eget id, aliquam eget nihh et. Maecan aliquam, risus at semper.',
                'img' => 'storage/portfolio-assets/testimonials-2.jpg',
                'name' => 'Parker Lewis',
                'positions' => 'CEO &amp; Founder',
            ],
            [
                'comment' => 'Proin iaculis purus consequat sem cure digni ssim donec porttora entum suscipit rhoncus. Accusantium quam ultrices eget id, aliquam eget nihh et. Maecan aliquam, risus at semper.',
                'img' => 'storage/portfolio-assets/testimonials-3.jpg',
                'name' => 'Saul Goodman',
                'positions' => 'CEO &amp; Founder',
            ],
            [
                'comment' => 'Proin iaculis purus consequat sem cure digni ssim donec porttora entum suscipit rhoncus. Accusantium quam ultrices eget id, aliquam eget nihh et. Maecan aliquam, risus at semper.',
                'img' => 'storage/portfolio-assets/testimonials-5.jpg',
                'name' => 'John Lewis',
                'positions' => 'CEO &amp; Founder',
            ],
        ]);
    }
}
