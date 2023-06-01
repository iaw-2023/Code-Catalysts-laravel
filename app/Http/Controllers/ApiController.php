<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeloCamiseta;
use App\Models\modeloLiga;
use App\Models\modeloPedido;
use App\Models\modeloEquipo;
use App\Models\modeloDetalles;
use App\Models\modeloCliente;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function camisetas(Request $request) {
        $camisetas = modeloCamiseta::where('estado','Habilitado')
            ->select('id_camiseta','descripcion','precio','talles','imagen','id_equipo')
            ->get();
        return response()->json($camisetas);
    }

    public function ligas(Request $request) {
        $ligas = modeloLiga::select('id_liga','nombre')->get();
        return response()->json($ligas);
    }

    public function equipos(Request $request) {
        $equipos = modeloEquipo::select('id_equipo','nombre','id_liga')->get();
        return response()->json($equipos);
    }

    public function camisetasPorEquipo(Request $request) {
        $camisetas = modeloCamiseta::where('id_equipo',$request->id)
            ->where('estado','Habilitado')
            ->select('id_camiseta','descripcion','precio','talles','imagen')
            ->get();
        return response()->json($camisetas);
    }

    public function camisetasPorLiga(Request $request) {
        $camisetas = modeloCamiseta::whereHas('equipo', function ($query) use ($request) {  $query->where('id_liga', $request->id);})->where('estado', 'Habilitado')
        ->with('equipo:id_equipo')
        ->get();
        
        return response()->json($camisetas);
    }

    public function pedido(Request $request) {
        if (modeloCliente::where('id_cliente',$request->id_cliente)->exists()) {
            DB::beginTransaction();
            $pedido = new modeloPedido();
            $pedido->id_cliente = $request->id_cliente;
            $pedido->fecha = now();
            $pedido->created_at = now();
            $pedido->updated_at = now();
            $pedido->save();
            $ultimo_pedido = modeloPedido::latest('id_pedido')->first();
            foreach($request->camisetas as $camiseta) {
                if (modeloCamiseta::where('id_camiseta',$camiseta["id_camiseta"])->exists()) {
                    $detalle = new modeloDetalles();
                    $detalle->id_pedido = $ultimo_pedido->id_pedido;
                    $detalle->id_camiseta = $camiseta["id_camiseta"];
                    $detalle->talle = $camiseta["talle"];
                    $detalle->created_at = now();
                    $detalle->updated_at = now();
                    $detalle->save();
                }
                else {
                    DB::rollBack();
                    return response()->json("La camiseta con id " . $camiseta['id_camiseta'] . " no se encuentra en la base de datos.",500);
                }
            }
            DB::commit();
            return response()->json("El pedido fue registrado correctamente.",200);
        }
        else {
            return response()->json("El cliente no se encuentra en la base de datos.",500);
        }
    }

    public function camisetasPorId(Request $request) {
        $camisetas = modeloCamiseta::where('id_camiseta',$request->id)
            ->where('estado','Habilitado')
            ->select('id_camiseta','descripcion','precio','talles','imagen')
            ->get();
        return response()->json($camisetas);
    }

    public function equiposPorLiga(Request $request) {
        $equipos = modeloEquipo::where('id_liga',$request->id)
        ->select('id_equipo','nombre','id_liga')
        ->get();
        return response()->json($equipos);
    }

    public function ligaPorId(Request $request) {
        $liga = modeloLiga::where('id_liga',$request->id)
        ->get();
        return response()->json($liga);
    }

    public function equipoPorId(Request $request) {
        $equipo = modeloEquipo::where('id_equipo',$request->id)
        ->get();
        return response()->json($equipo);
    }

}
