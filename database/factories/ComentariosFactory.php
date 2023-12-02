<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Preguntas;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentarios>
 */
class ComentariosFactory extends Factory
{
   public function definition(): array{
    return[
        'preguntas_id' => Preguntas::factory(),
        'user_id' => User::factory(),
        'body' => fake()-> text(500)
    ];
   }
}
