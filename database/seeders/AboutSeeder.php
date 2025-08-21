<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::insert([
            [
                'subtitle'   => 'UI/UX Designer & Web Developer',
                'birthdate'  => '1983-09-29',
                'website'    => 'www.example.com',
                'phone'      => '+123 456 789',
                'city'       => 'Bruxelles, BEL',
                'age'        => 39,
                'degree'     => 'Master',
                'email'      => 'email@example.com',
                'freelance'  => 'Disponible',
                'subtext'    => "Ceci est le merveilleur texte du dessous qui vous rappelle a quel point m'embaucher c'est deja faire un pas en direction du succes ",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
