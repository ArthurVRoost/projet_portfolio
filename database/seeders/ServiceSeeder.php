<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert([
            [
                'icon' => "fa-solid fa-laptop",
                'title' => 'Nettoyage de monstre',
                'text' => 'Lorem ipsum dolor sit, amet consectetur adipiscing elit. Fugit hic explicabo, enim sapiente incidunt repundiante porro vel',
            ],
            [
                'icon' => "fa-solid fa-image",
                'title' => 'Regulation des wyvems ',
                'text' => 'Lorem ipsum dolor sit, amet consectetur adipiscing elit. Fugit hic explicabo, enim sapiente incidunt repundiante porro vel',
            ],
            [
                'icon' => "fa-solid fa-chart-line",
                'title' => 'Depecage de monstre ',
                'text' => 'Lorem ipsum dolor sit, amet consectetur adipiscing elit. Fugit hic explicabo, enim sapiente incidunt repundiante porro vel',
            ],
            [
                'icon' => "fa-solid fa-gear",
                'title' => 'Installation de base',
                'text' => 'Lorem ipsum dolor sit, amet consectetur adipiscing elit. Fugit hic explicabo, enim sapiente incidunt repundiante porro vel',
            ],
            [
                'icon' => "fa-solid fa-globe",
                'title' => 'Anihilation des dragons anciens',
                'text' => 'Lorem ipsum dolor sit, amet consectetur adipiscing elit. Fugit hic explicabo, enim sapiente incidunt repundiante porro vel',
            ],
            [
                'icon' => "fa-solid fa-list-check",
                'title' => 'Expansion du territoire',
                'text' => 'Lorem ipsum dolor sit, amet consectetur adipiscing elit. Fugit hic explicabo, enim sapiente incidunt repundiante porro vel',
            ],
            
        ]);
    }
}
