<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
  
    protected $model = Tag::class;

  
    public function definition()
    {
        return [
            // Puedes definir aquí los campos necesarios para generar datos de prueba para las etiquetas.
            'name' => $this->faker->word,
        ];
    }
}

