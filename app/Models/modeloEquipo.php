<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\modeloLiga;
use App\Models\modeloCamiseta;

class modeloEquipo extends Model
{
    use HasFactory;
    protected $table = 'equipo'; 
    protected $primaryKey = 'id_equipo';

    public function liga(){
        return $this->belongsTo(modeloLiga::class, 'id_liga');
    }

    public function camisetas(){
        return $this->hasMany(modeloCamiseta::class, 'id_equipo');
    }
}