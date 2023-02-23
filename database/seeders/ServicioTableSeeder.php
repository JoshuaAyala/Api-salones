<?php

use Illuminate\Database\Seeder;
use App\Models\Servicio;

class ServicioTableSeeder extends Seeder
{
    public function run()
    {
        // Crear usuarios de prueba
        Servicio::create([
            'name' => 'Servicio Gourmet 2',
            'description' => 'Dos platillos y postre.',
            'price' => 5500,
        ]);

        Servicio::create([
            'name' => 'Servicio Gourmet 3',
            'description' => 'Cuatro platillos y postre.',
            'price' => 7000,
        ]);

        Servicio::create([
            'name' => 'Servicio Sencillo 1',
            'description' => 'Dos platillos y postre.',
            'price' => 2000,
        ]);

        Servicio::create([
            'name' => 'Servicio Sencillo 2',
            'description' => 'Cuatro platillos y postre.',
            'price' => 4000,
        ]);
    }
}
