<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Evento;
use App\Models\Video;

class CommentSeeder extends Seeder
{
    
    public function run()
    {
        // Obtener eventos existentes en la base de datos
        $eventos = Evento::all();

        // Obtener videos existentes en la base de datos
        $videos = Video::all();

        // Crear algunos comentarios para eventos
        foreach ($eventos as $evento) {
            $evento->comments()->createMany([
                ['mensaje' => 'Comentario en el evento'],
                ['mensaje' => 'Otro comentario en el evento'],
            ]);
        }

        // Crear algunos comentarios para videos
        foreach ($videos as $video) {
            $video->comments()->createMany([
                ['mensaje' => 'Comentario en el video'],
                ['mensaje' => 'Otro comentario en el video'],
            ]);
        }
    }
}
