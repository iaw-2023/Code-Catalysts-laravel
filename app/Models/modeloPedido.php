<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\modeloCliente;
use App\Models\modeloDetalles;

class modeloPedido extends Model
{
    use HasFactory;
    protected $table = 'pedido'; 
    protected $primaryKey = 'id_pedido';

    //la clave que aparece camiseta
    public function cliente(){
        return $this->belongsTo(modeloCliente::class,'id_cliente');
    }

    //la clave foranea, la que aparece en detalles
    public function detalles(){
        return $this->hasMany(modeloDetalles::class,'id_pedido');
    }

}
