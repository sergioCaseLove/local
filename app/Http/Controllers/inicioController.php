<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;;
use App\prueba;
use Maatwebsite\Excel\Facades\Excel;
class inicioController extends Controller
{
	public function inicio()
	{
		//$pedido = \App\prueba::all();
		\Excel::create('Laravel Excel', function($excel) {

	    	$excel->sheet('Excel sheet', function($sheet) {

	       		$sheet->setOrientation('landscape');

			});

		})->export('xls');	
		//return view('welcome');
		return $pedido;
	}

	public function verPedido()
	{
		$pedido = \App\prueba::get();
		return $pedido;
	}
}
