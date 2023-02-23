<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $handler = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            \DB::table("users")->insert([
                'name' => $handler->firstName("male"),
                'email' => $handler->email,
                'password' => $handler->sha1,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}