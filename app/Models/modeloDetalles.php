<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ModeloPedido;
use App\Models\ModeloCamiseta;

class ModeloDetalles extends Model
{
    use HasFactory;
    protected $table = 'detalle_pedido';
    protected $primaryKey = 'id_detalle_pedido'; 

    //la clave que aparece camiseta
    public function pedido(){
        return $this->belongsTo(ModeloPedido::class,'id_pedido');
    }

    //la clave que aparece camiseta
    public function camiseta(){
        return $this->belongsTo(ModeloCamiseta::class,'id_camiseta');
    }
}
