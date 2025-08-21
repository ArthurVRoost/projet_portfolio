<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::insert([
            [
                'skill'      => 'HTML',
                'pourcentage'=> 95,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'skill'      => 'CSS',
                'pourcentage'=> 90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'skill'      => 'JavaScript',
                'pourcentage'=> 70,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'skill'      => 'PHP',
                'pourcentage'=> 70,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'skill'      => 'Laravel',
                'pourcentage'=> 85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'skill'      => 'ReactJS',
                'pourcentage'=> 85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'skill'      => 'NextJS',
                'pourcentage'=> 70,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
