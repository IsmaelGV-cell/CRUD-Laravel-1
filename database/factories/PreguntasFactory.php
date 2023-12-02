<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Categorias;
use App\Models\User;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Preguntas>
 */
class PreguntasFactory extends Factory
{
    public function definition(): array
    {
        return [
            'categorias_id' => Categorias::factory(),
            'user_id' => User::factory(),
            'titulo' => $title = fake()->unique()-> sentence(),
            'slug' => Str::slug($title),
            'body' => fake()->text(1300)
        ];
    }
}
