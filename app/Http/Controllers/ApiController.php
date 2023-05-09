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
        $camisetas = modeloCamiseta::all();
        return response()->json($camisetas);
    }

    public function ligas(Request $request) {
        $ligas = modeloLiga::all();
        return response()->json($ligas);
    }

    public function equipos(Request $request) {
        $equipos = modeloEquipo::all();
        return response()->json($equipos);
    }

    public function camisetasPorEquipo(Request $request) {
        $camisetas = modeloCamiseta::where('id_equipo',$request->id)->get();
        return response()->json($camisetas);
    }

    public function camisetasPorLiga(Request $request) {
        $camisetas = DB::table('liga')
            ->join('equipo', 'liga.id_liga', '=', 'equipo.id_liga')
            ->join('camiseta', 'equipo.id_equipo', '=', 'camiseta.id_equipo')
            ->select('camiseta.*', 'equipo.*', 'liga.nombre AS liga')
            ->where('liga.id_liga',$request->id)
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
        foreach($request->camisetas as $pedido) {
            $detalle = new modeloDetalles();
            $detalle->id_pedido = $ultimo_pedido->id_pedido;
            $detalle->id_camiseta = $pedido[0];
            $detalle->talle = $pedido[1];
            $detalle->created_at = now();
            $detalle->updated_at = now();
            $detalle->save();
        }
    }
}
