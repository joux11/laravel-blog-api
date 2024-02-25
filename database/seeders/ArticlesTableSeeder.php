<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ? Aqui la tabla se llenan con datos ficticios
        Article::truncate();
        $faker = \Faker\Factory::create();
        // ? el for para generar las cantidades de datos ficticios
        for ($i = 0; $i < 20; $i++) {
            //? create son funciones magicas
            Article::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph
            ]);
        }
    }
}
