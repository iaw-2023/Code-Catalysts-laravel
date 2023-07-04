<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\modeloCliente;

class modeloSesionesActivas extends Model
{
    use HasFactory;
    protected $table = 'sesiones_activas'; 
    protected $primaryKey = 'token';
}
