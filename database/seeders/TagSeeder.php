<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    
    public function run()
    {
        
        Tag::create(['name' => 'Paseo']);
        Tag::create(['name' => 'Ruta Corta']);
        Tag::create(['name' => 'Ruta Larga']);
       
    }
}

