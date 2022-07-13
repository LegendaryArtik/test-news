<?php

namespace Database\Seeders;

use App\Models\News;
use Faker\Factory;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i <= 20; $i++) {
            News::create([
                'title' => $faker->sentence,
                'description' => $faker->text(500),
                'main_image' => $faker->imageUrl(200, 200),
            ]);
        }
    }
}
