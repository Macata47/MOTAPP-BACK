<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Evento;

class EventoSeeder extends Seeder
{
    
    public function run()
    {
        
        
        Evento::create([
            'name' => 'Evento de ejemplo 1',
            'description' => 'Descripción del evento de ejemplo 1',
            'user_id' => 1, 
            'categoria_id' => 1, 
        ]);

        Evento::create([
            'name' => 'Evento de ejemplo 2',
            'description' => 'Descripción del evento de ejemplo 2',
            'user_id' => 2, 
            'categoria_id' => 2, 
        ]);

       
    }
}
