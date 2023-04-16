<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\modeloLiga;
use app\Models\modeloCamiseta;

class modeloEquipo extends Model
{
    use HasFactory;
    protected $table = 'equipo'; 

    public function Liga(){
        return $this->belongsTo(modeloLiga::class,'id_liga');
    }

    //la clave foranea, la que aparece en detalles
    public function camisetas(){
        return $this->hasMany(modeloCamiseta::class,'id_equipo');
    }
}
