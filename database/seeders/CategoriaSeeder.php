<?php

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creamos algunas categorías de ejemplo
        Categoria::create(['name' => 'Paseo']);
        Categoria::create(['name' => 'Ruta Corta']);
        Categoria::create(['name' => 'Ruta Larga']);
        
    }
}
