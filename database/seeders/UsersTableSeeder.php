<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        $faker = \Faker\Factory::create();

        $password = Hash::make("123456");
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => $password
        ]);

        // ? el for para generar las cantidades de datos ficticios
        for ($i = 0; $i < 20; $i++) {
            //? create son funciones magicas
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password
            ]);
        }
    }
}
