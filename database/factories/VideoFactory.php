<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    
    protected $model = Video::class;

   
    public function definition()
    {
        return [
            // Puedes definir aquí los campos necesarios para generar datos de prueba para los videos.
            'name' => 'titulo video',
            'description' => 'Descripción del video',
            'url' => 'https://ejemplo.com/video', // Aquí proporciona la URL real del video
            'user_id' => function () {
                // Puedes ajustar esta lógica según tus necesidades
                return \App\Models\User::factory()->create()->id;
            },
        ];
    }
}

