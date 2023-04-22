<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\modeloEquipo;

class modeloLiga extends Model
{
    use HasFactory;
    protected $table = 'liga'; 
    protected $primaryKey = 'id_liga';

    //la clave foranea, la que aparece en detalles
    public function equipos(){
        return $this->hasMany(modeloEquipo::class,'id_liga');
    }   
}
