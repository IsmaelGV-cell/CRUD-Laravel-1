<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    use HasFactory;
    // Relación de 1:M
    public function comentarios(){
        return $this->hasMany(Comentarios::class);
    }

    // Relacion de M:M
    public function etiquetas(){
        return $this->belongsToMany(Etiquetas::class);
    }

    //Relacion de M:1
    public function categorias(){
        return $this->belongsTo(Categorias::class);
    }

    //Relacion de M:1
    public function user(){
        return $this->belongsTo(User::class);
    }
}
