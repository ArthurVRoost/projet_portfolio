<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::insert([
            [
                'street'     => 'Place de la minoterie',
                'number'     => 10,
                'city'       => 'Bruxelles',
                'zip'        => '1080',
                'phone'      => '+32 486 68 54 21',
                'email'      => 'contact1@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
