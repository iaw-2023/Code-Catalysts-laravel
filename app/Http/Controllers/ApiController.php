<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeloCamiseta;
use App\Models\modeloLiga;
use App\Models\modeloPedido;
use App\Models\modeloEquipo;
use App\Models\modeloDetalles;
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
        $camisetas = modeloLiga::join('equipo', 'liga.id_liga', '=', 'equipo.id_liga')
            ->join('camiseta', 'equipo.id_equipo', '=', 'camiseta.id_equipo')
            ->select('id_camiseta','descripcion','precio','talles','imagen', 'equipo.id_equipo')
            ->where('liga.id_liga',$request->id)
            ->where('estado','Habilitado')
            ->get();
        return response()->json($camisetas);
    }

    public function pedido(Request $request) {
        $pedido = new modeloPedido();
        $pedido->id_cliente = $request->id_cliente;
        $pedido->fecha = now();
        $pedido->created_at = now();
        $pedido->updated_at = now();
        $pedido->save();
        $ultimo_pedido = modeloPedido::latest('id_pedido')->first();
        foreach($request->camisetas as $camiseta) {
                $detalle = new modeloDetalles();
                $detalle->id_pedido = $ultimo_pedido->id_pedido;
                $detalle->id_camiseta = $camiseta["id_camiseta"];
                $detalle->talle = $camiseta["talle"];
                $detalle->created_at = now();
                $detalle->updated_at = now();
                $detalle->save();
        }
    }
}
