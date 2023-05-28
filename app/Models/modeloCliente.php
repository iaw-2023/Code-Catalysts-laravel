<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\modeloPedido;

class modeloCliente extends Model
{
    use HasFactory;
    protected $table = 'cliente'; 
    protected $primaryKey = 'id_cliente';

    //la clave foranea, la que aparece en pedido
    public function pedidos(){
        return $this->hasMany(modeloPedido::class,'id_cliente');
    }
}
