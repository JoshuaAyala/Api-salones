<?php

use Illuminate\Database\Seeder;
use App\Models\Salon;

class SalonTableSeeder extends Seeder
{
    public function run()
    {
        // Crear usuarios de prueba
        Salon::create([
            'name' => 'Salon Alpha',
            'description' => 'Alberca, patio, 2 pisos.',
            'capacity' => 100,
            'hour_price' => 1000
        ]);

        Salon::create([
            'name' => 'Salon Beta',
            'description' => 'Alberca, 2 pisos.',
            'capacity' => 80,
            'hour_price' => 700
        ]);

        Salon::create([
            'name' => 'Salon Aqua',
            'description' => 'Alberca, 1 piso.',
            'capacity' => 100,
            'hour_price' => 500
        ]);
    }
}