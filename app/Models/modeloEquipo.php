<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ModeloLiga;
use App\Models\ModeloCamiseta;

class ModeloEquipo extends Model
{
    use HasFactory;
    protected $table = 'equipo'; 
    protected $primaryKey = 'id_equipo';

    public function liga(){
        return $this->belongsTo(ModeloLiga::class, 'id_liga');
    }

    public function camisetas(){
        return $this->hasMany(ModeloCamiseta::class, 'id_equipo');
    }
}