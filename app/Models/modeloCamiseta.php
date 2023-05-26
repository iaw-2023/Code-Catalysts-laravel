<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ModeloEquipo;
use App\Models\ModeloDetalles;

class ModeloCamiseta extends Model
{
    use HasFactory;
    protected $table = 'camiseta'; 
    protected $primaryKey = 'id_camiseta';

    //la clave que aparece camiseta
    public function equipo(){
        return $this->belongsTo(ModeloEquipo::class,'id_equipo');
    }

    //la clave foranea, la que aparece en detalles
    public function detalles(){
        return $this->hasMany(ModeloDetalles::class,'id_camiseta');
    }
}
