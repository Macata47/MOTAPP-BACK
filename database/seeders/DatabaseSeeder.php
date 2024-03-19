<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Categoria;
use App\Models\Evento;
use App\Models\Video;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(CategoriaSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(EventoSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(VideoSeeder::class);

    }
}
