<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\User;
use \App\Models\Categorias;
use \App\Models\Preguntas;
use \App\Models\Comentarios;
use \App\Models\Etiquetas;
use \App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // public function run(): void
    // {
    //     User::factory(10) ->create();
    //     Categorias::factory(5) ->create();
    //     Preguntas::factory(40) ->create();
    //     Comentarios::factory(80) ->create();
    //     Etiquetas::factory(18) ->create();
    // }

    // public function run(): void
    // {
    //     // Primero creamos 6 etiquetas
    //     Etiquetas::factory(6)->create();
    //     // Después creamos 5 categorias que tengan 10 preguntas cada una, que a su vez tengan 8 comentarios
    //     Categorias::factory(5)->has(
    //         Preguntas::factory(10)->hasComentarios(8)
    //     )
    //     ->create();
    //     // Relacionamos las etiquetas creadas con las preguntas
    //     $etiquetas = Etiquetas::all();
    //     Preguntas::all()->each(function ($pregunta) use ($etiquetas){
    //         $etiqueta = $etiquetas->random(
    //             rand(1,6)
    //         )
    //         ->pluck('id')->toArray();
    //         $pregunta->etiquetas()->attach($etiqueta);
    //     });
    // }

    public function run():void{
        Product::factory(100)->create();
    }


}
