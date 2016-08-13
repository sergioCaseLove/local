<?php

namespace App\Http\Controllers;
use Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
class PedidoController extends Controller
{
	
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function prueba()
    {
		$ordenes = \App\Orden::where('orden_id', 1300)->orwhere('orden_id', 1210)->get();
    	//$prueba = "prueba";
    	//return view('pedidoPanel', $prueba);
        return view('pedidoPane', ['ordenes' => $ordenes]);
    }
    public function listaPedido()
    {
    	//return view('pedidoPanel', $prueba);
        return $ordenes;
	}
}