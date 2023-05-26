<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ModeloPedido;

class ModeloCliente extends Model
{
    use HasFactory;
    protected $table = 'cliente'; 
    protected $primaryKey = 'id_cliente';

    //la clave foranea, la que aparece en pedido
    public function pedidos(){
        return $this->hasMany(ModeloPedido::class,'id_cliente');
    }
}
