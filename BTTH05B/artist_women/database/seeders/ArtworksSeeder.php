<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class ArtworksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('artworks')->insert([
                'artist_name' => $faker->name,
                'description' => $faker->paragraph,
                'art_type' => $faker->randomElement(['hội họa', 'âm nhạc', 'văn học']),
                'media_link' => $faker->url,
                'cover_image' => $faker->imageUrl(400, 300, 'abstract', true), 
            ]);
        }
    }
}
