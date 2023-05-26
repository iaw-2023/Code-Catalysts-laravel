<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ModeloEquipo;
use App\Models\ModeloDetalles;

class ModeloPedido extends Model
{
    use HasFactory;
    protected $table = 'pedido'; 
    protected $primaryKey = 'id_pedido';

    //la clave que aparece camiseta
    public function cliente(){
        return $this->belongsTo(ModeloCliente::class,'id_cliente');
    }

    //la clave foranea, la que aparece en detalles
    public function detalles(){
        return $this->hasMany(ModeloDetalle::class,'id_pedido');
    }

}
