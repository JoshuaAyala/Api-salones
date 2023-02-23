<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Disponibilidad;
use Carbon\Carbon;
class DisponibilidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Disponibilidad::create([
            'disponibilidad_id' => 1,
            'start' => Carbon::now(),
            'end' => Carbon::now()->addHours(2),
        ]);
    }
}
