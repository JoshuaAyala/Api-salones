<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reservacion;
use Carbon\Carbon;
class ReservacionTableSeeder extends Seeder
{
    public function run()
    {
        // Crear usuarios de prueba
        Reservacion::create([
            'user_id' => 1,
            'salon_id' => 1,
            'disponibilidad_id' => 1,
            'start' => Carbon::now(),
            'end' => Carbon::now()->addHours(2),
            'servicios' => 1
        ]);

        Reservacion::create([
            'user_id' => 2,
            'salon_id' => 2,
            'disponibilidad_id' => 2,
            'start' => Carbon::now(),
            'end' => Carbon::now()->addHours(2),
            'servicios' => 4
        ]);
    }
}
