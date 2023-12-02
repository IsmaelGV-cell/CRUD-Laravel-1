<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Etiquetas;
use Illuminate\Http\Request;
use App\Models\Preguntas;

class PaginaControlador extends Controller
{
    public function gestionHome(){
        // return view ('home');
        $preguntas = Preguntas::orderBy("id","DESC")->paginate();
        return view("home", compact("preguntas"));
    }
    public function gestionCategoria(Categorias $nombreCategoria){
        // return "categoria: $nombreCategoria";
        // return view ('categoria', compact ('nombreCategoria'));
        $preguntas = $nombreCategoria->preguntas()->orderBy("id","DESC")->paginate();
        return view("categoria", compact("nombreCategoria", 'preguntas'));
    }
    public function gestionEtiqueta(Etiquetas $nombreEtiqueta){
        // return "etiqueta: $nombreEtiqueta";
        // return view ('etiqueta', compact ('nombreEtiqueta'));
        $preguntas = $nombreEtiqueta->preguntas()->orderBy("id","DESC")->paginate();
        return view("etiqueta", compact("nombreEtiqueta", 'preguntas'));

    }
    public function gestionPregunta(Preguntas $nombrePregunta){
        // return "pregunta: $nombrePregunta";
        return view ('pregunta', compact ('nombrePregunta'));
    }
}
