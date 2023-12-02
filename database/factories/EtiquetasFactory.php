<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etiquetas>
 */
class EtiquetasFactory extends Factory
{
    public function definition(): array
    {
        return [
           'nombre' => $nombre = fake() -> unique() -> word(),
           'slug' => Str::slug($nombre)
        ];
    }
}
