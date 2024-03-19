<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
   
    public function run()
    {
      
        Categoria::create(['name' => 'Paseo']);
        Categoria::create(['name' => 'Ruta Corta']);
        Categoria::create(['name' => 'Ruta Larga']);
    }
}

