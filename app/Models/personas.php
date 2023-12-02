<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personas extends Model
{
    protected $fillable = [
        // 'imagen',
        // 'username',
        // 'password',
        // 'token',
        'nombres',
        'disponible'
    ];
    public $timestamps = false;
    use HasFactory;
}
