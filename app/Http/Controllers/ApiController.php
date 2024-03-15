<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeloCamiseta;
use App\Models\modeloLiga;
use App\Models\modeloPedido;
use App\Models\modeloEquipo;
use App\Models\modeloDetalles;
use App\Models\modeloCliente;
use App\Models\modeloSesionesActivas;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use MercadoPago\SDK;

class ApiController extends Controller
{
    public function camisetas(Request $request) {
        $camisetas = modeloCamiseta::where('estado','Habilitado')
            ->join('equipo','camiseta.id_equipo','=','equipo.id_equipo')
            ->join('liga','equipo.id_liga','=','liga.id_liga')
            ->select('camiseta.*','equipo.nombre as equipo','liga.nombre as liga','liga.id_liga')
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
        $camisetas = modeloCamiseta::where('estado','Habilitado')
            ->join('equipo','camiseta.id_equipo','=','equipo.id_equipo')
            ->join('liga','equipo.id_liga','=','liga.id_liga')
            ->where('equipo.id_equipo',$request->id)
            ->select('camiseta.*','equipo.nombre as equipo','liga.nombre as liga','liga.id_liga')
            ->get();
        return response()->json($camisetas);
    }

    public function camisetasPorLiga(Request $request) {
        $camisetas = modeloCamiseta::where('estado','Habilitado')
            ->join('equipo','camiseta.id_equipo','=','equipo.id_equipo')
            ->join('liga','equipo.id_liga','=','liga.id_liga')
            ->where('liga.id_liga',$request->id)
            ->select('camiseta.*','equipo.nombre as equipo','liga.nombre as liga','liga.id_liga')
            ->get();
        return response()->json($camisetas);
    }

    public function pedido(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'token' => 'required|numeric',
            'camisetas' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        DB::beginTransaction();

        if (modeloSesionesActivas::where('email',$request->email)->exists()) {
            if (modeloSesionesActivas::where('token',$request->token)->exists()) {
                $sesionActiva = modeloSesionesActivas::find($request->token);
                if ($sesionActiva->email == $request->email) {
                    $cliente = modeloCliente::where('email',$request->email)->first();
                }
                else {
                    return response()->json("Token inválido.",400);
                }
            }
            else {
                return response()->json("Token inválido.",400);
            }  
        }
        else {
            return response()->json("El usuario no tiene una sesión activa.",500);
        }

        $pedido = new modeloPedido();
        $pedido->id_cliente = $cliente->id_cliente;
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

    public function camisetasPorId(Request $request) {
        $camisetas = modeloCamiseta::where('id_camiseta',$request->id)
            ->where('estado','Habilitado')
            ->select('id_camiseta','descripcion','precio','talles','imagen')
            ->get();
        return response()->json($camisetas);
    }

    public function equiposPorLiga(Request $request) {
        $equipos = modeloEquipo::where('equipo.id_liga',$request->id)
        ->join('liga','liga.id_liga','=','equipo.id_liga')
        ->select('id_equipo','equipo.nombre','liga.id_liga','liga.nombre as liga')
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

    public function login(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        if (modeloCliente::where('email',$request->email)->exists()) {
            $cliente = modeloCliente::where('email', $request->email)->first();
            if (Hash::check($request->password, $cliente->password)) {
                $sesionActiva = new modeloSesionesActivas();
                $sesionActiva->email = $request->email;
                $sesionActiva->save();
                $token = modeloSesionesActivas::latest('token')->select('token')->first();
                return response()->json($token, 200);
            } else {
                return response()->json("Contraseña inválida.", 400);
            }
        }else{
            return response()->json("Email inválido.",400);
        }
    }

    public function logout(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'token' => 'required|numeric',
        ]);
    
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        if (modeloSesionesActivas::where('email',$request->email)->exists()) {
            if (modeloSesionesActivas::where('token',$request->token)->exists()) {
                $sesionActiva = modeloSesionesActivas::find($request->token);
                if ($sesionActiva->email == $request->email) {
                    $sesionActiva->delete();
                    return response()->json("La sesión fue cerrada correctamente.",200);
                }
                else {
                    return response()->json("Token inválido.",400);
                }
            }
            else {
                return response()->json("Token inválido.",400);
            }
        }
        else {
            return response()->json("El usuario no tiene una sesión activa.",400);
        }
    }

    public function register(Request $request){
        $credentials = $request->only('email', 'password');

        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required|min:8|regex:/\d/',
        ]);

        if ($validator->fails()) {
            return response()->json(['Credenciales invalidas' => $validator->errors()], 400);
        }else{
            if (modeloCliente::where('email',$request->email)->exists()) {
                return response()->json("El email ya estaba registrado",400);
            }else{
                $cliente = new modeloCliente();
                $cliente->email = $request->email;
                $cliente->password = Hash::make($request->password);
                $cliente->created_at = now();
                $cliente->updated_at = now();
                $cliente->save();
                $sesionActiva = new modeloSesionesActivas();
                $sesionActiva->email = $request->email;
                $sesionActiva->save();
                $token = modeloSesionesActivas::latest('token')->select('token')->first();
                return response()->json($token, 200);
            }
        }
    }

    public function pedidosPorEmail(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'token' => 'required|numeric',
        ]);
    
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $email = $request->input('email');
        $token = $request->input('token');

        if (modeloSesionesActivas::where('email',$email)->exists()) {
            if (modeloSesionesActivas::where('token',$token)->exists()) {
                $sesionActiva = modeloSesionesActivas::find($token);
                if ($sesionActiva->email == $email) {
                    $cliente = modeloCliente::where('email', $email)->first();
                    $pedidos = modeloPedido::where('id_cliente',$cliente->id_cliente)
                    ->join('detalle_pedido','detalle_pedido.id_pedido','=','pedido.id_pedido')
                    ->join('camiseta','camiseta.id_camiseta','=','detalle_pedido.id_camiseta')
                    ->get();
                    return response()->json($pedidos,200);
                }
                else {
                    return response()->json("Token inválido.",400);
                }
            }
            else {
                return response()->json("Token inválido.",400);
            }
        }
        else {
            return response()->json("El usuario no tiene una sesión activa.",400);
        }
    }

    public function mercadoPago(Request $request)
{
    \MercadoPago\SDK::setAccessToken('TEST-6003817481335254-062017-3dc975bcfed8df6f5cc77b2132ef9d9f-389020167');

    $payment = new \MercadoPago\Payment();

    $payment->transaction_amount = $request->input('transaction_amount');
    $payment->token = $request->input('token');
    $payment->installments = $request->input('installments');
    $payment->payment_method_id = $request->input('payment_method_id');
    $payment->issuer_id = $request->input('issuer_id');

    $payer = new \MercadoPago\Payer();
    $payer->email = $request->input('payer.email');
    $payer->identification = array(
        "type" => $request->input('payer.identification.type'),
        "number" => $request->input('payer.identification.number')
    );

    $payment->payer = $payer;

    $payment->save();

    $response = array(
        'status' => $payment->status,
        'status_detail' => $payment->status_detail,
        'id' => $payment->id
    );

    return response()->json($response);
}
}
