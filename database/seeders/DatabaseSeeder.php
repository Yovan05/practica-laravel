<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Se pueden poner los factory en este archivo y en caso de que tengas un seeder, dentro del seeder
        Post::factory(100)->create();

        $this->call([
            UserSeeder::class,
            PostSeeder::class,
        ]);
    }
}
