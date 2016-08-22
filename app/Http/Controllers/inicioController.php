<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\prueba;
use Maatwebsite\Excel\Facades\Excel;
use App\ArticulosSait;
use App\Categoria;	
use App\Familia;
use App\Departamento;
use App\Linea;
use App\Modelo;
use App\Disenio;
use App\Catalago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
class inicioController extends Controller
{
	private $tipos;
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
	public function temp()
	{
		$familias = \App\Familia::All();
		//return view('welcome', ['categorias' => $categorias, 'familias' => $familias, 'departamentos' => $departamentos, 'lineas' => $lineas]);
		return view('welcome', ['familias' => $familias]);
	}
	public function opcion2()
	{
		$familias = \App\Familia::All();
		$modelos = \App\Modelo::All();
		$cats = \App\Catalago::distinct()->groupby('clave_catalago')->get();
		//return view('welcome', ['categorias' => $categorias, 'familias' => $familias, 'departamentos' => $departamentos, 'lineas' => $lineas]);
		return view('welcome2', ['familias' => $familias, 'modelos' => $modelos, 'cats' => $cats]);
	}
	public function importDatos()
	{
		$dato = array();
		\Excel::load('Libro1.csv', function($reader){
			//foreach($reader->get() as $baia)
				$dato = $reader->toArray();
		});
		return $dato;
	}

	public function getArtic()
	{
		$modelos = \App\Modelo::All();
		return $modelos;
	}

	public function guardarCampo(Request $request)
	{
		$tipos = $request->input('tipos');
		$clave = $request->input('clave');
		$description = $request->input('description');
		$codigo_barras = $request->input('codigo_barras');
		$unidad = $request->input('unidad');
		$marca = $request->input('marca');
		$modelo = $request->input('modelo');
		$impuesto1 = $request->input('impuesto1');
		$numero_proveedor = $request->input('numero_proveedor');
		$numero_proveedor2 = $request->input('numero_proveedor2');
		$numero_proveedor3 = $request->input('numero_proveedor3');
		$numero_proveedor4 = $request->input('numero_proveedor4');
		$divisa = $request->input('divisa');
		$precio = $request->input('precio');
		$precio2 = $request->input('precio2');
		$precio3 = $request->input('precio3');
		$precio4 = $request->input('precio4');
		$precio5 = $request->input('precio5');
		$ultimo_costo = $request->input('ultimo_costo');
		$disenioResult = \App\Disenio::All();
/*
							$rowArray = array(
									$clave . "A", 
									$description, 
									"A", 
									"Rudo", 
									$impuesto1,
									$numero_proveedor,
									$numero_proveedor2,
									$numero_proveedor3,
									$numero_proveedor4,
									$divisa,
									$preciopub, 
									$precio,
									$precio2,
									$precio3,
									$precio4,
									$precio5
							);*/
		foreach($tipos as $tipo)
		{
			$producto = new \App\ArticulosSait;
			foreach($disenioResult as $row)
			{
				$claveDisenio = $row->clave;
				switch($tipo)
				{
					case 'A':
						$producto->clave = $clave . "A" . $claveDisenio;
						$producto->description = $description . " Uso Rudo";
						$producto->codigo_barras = $codigo_barras;
						$producto->unidad = $unidad;
						$producto->marca = $marca;
						$producto->modelo = $modelo;
						$producto->clave_familia = "A";
						$producto->familia = "Uso Rudo";
						$producto->impuesto1 = $impuesto1;
						$producto->divisa = $divisa;
						$producto->precio = $precio;
						$producto->precio2 = $precio2;
						$producto->ultimo_costo = $ultimo_costo;
						$producto->clave_disenio = $claveDisenio;
						$producto->save();
						break;
					case 'C':
						$producto->clave = 'C-' . $clave . $claveDisenio;
						$producto->description = $description . " Cartera";
						$producto->codigo_barras = $codigo_barras;
						$producto->unidad = $unidad;
						$producto->marca = $marca;
						$producto->modelo = $modelo;
						$producto->clave_familia = "C";
						$producto->familia = "Cartera";
						$producto->impuesto1 = $impuesto1;
						$producto->divisa = $divisa;
						$producto->precio = $precio;
						$producto->precio2 = $precio2;
						$producto->ultimo_costo = $ultimo_costo;
						$producto->clave_disenio = $claveDisenio;
						$producto->save();
						break;
					case 'DP':
						$producto->clave = 'DP-' . $clave . $claveDisenio;
						$producto->description = $description . " Dual Pro";
						$producto->codigo_barras = $codigo_barras;
						$producto->unidad = $unidad;
						$producto->marca = $marca;
						$producto->modelo = $modelo;
						$producto->clave_familia = "DP";
						$producto->familia = "Dual Pro";
						$producto->impuesto1 = $impuesto1;
						$producto->divisa = $divisa;
						$producto->precio = $precio;
						$producto->precio2 = $precio2;
						$producto->ultimo_costo = $ultimo_costo;
						$producto->clave_disenio = $claveDisenio;
						$producto->save();
						break;
					case 'HG':
						$producto->clave = "HG-" . $clave . $claveDisenio;
						$producto->description = $description . " Glitter";
						$producto->codigo_barras = $codigo_barras;
						$producto->unidad = $unidad;
						$producto->marca = $marca;
						$producto->modelo = $modelo;
						$producto->clave_familia = "HG";
						$producto->familia = "Glitter";
						$producto->impuesto1 = $impuesto1;
						$producto->divisa = $divisa;
						$producto->precio = $precio;
						$producto->precio2 = $precio2;
						$producto->ultimo_costo = $ultimo_costo;
						$producto->clave_disenio = $claveDisenio;
						$producto->save();
						break;
					case 'HY':
						$producto->clave = "HY-" . $clave . $claveDisenio;
						$producto->description = $description . " Hibrido";
						$producto->codigo_barras = $codigo_barras;
						$producto->unidad = $unidad;
						$producto->marca = $marca;
						$producto->modelo = $modelo;
						$producto->clave_familia = "HY";
						$producto->familia = "Hibrido";
						$producto->impuesto1 = $impuesto1;
						$producto->divisa = $divisa;
						$producto->precio = $precio;
						$producto->precio2 = $precio2;
						$producto->ultimo_costo = $ultimo_costo;
						$producto->clave_disenio = $claveDisenio;
						$producto->save();
						break;
					case 'RC':
						$producto->clave = "RC-" . $clave . $claveDisenio;
						$producto->description = $description . " Rubber Case";
						$producto->codigo_barras = $codigo_barras;
						$producto->unidad = $unidad;
						$producto->marca = $marca;
						$producto->modelo = $modelo;
						$producto->clave_familia = "RC";
						$producto->familia = "Rubber Case";
						$producto->impuesto1 = $impuesto1;
						$producto->divisa = $divisa;
						$producto->precio = $precio;
						$producto->precio2 = $precio2;
						$producto->ultimo_costo = $ultimo_costo;
						$producto->clave_disenio = $claveDisenio;
						$producto->save();
						break;
					case 'RG':
						$producto->clave = "RG-" . $clave . $claveDisenio;
						$producto->description = $description . " Rubber Gel";
						$producto->codigo_barras = $codigo_barras;
						$producto->unidad = $unidad;
						$producto->marca = $marca;
						$producto->modelo = $modelo;
						$producto->clave_familia = "RG";
						$producto->familia = "Rubber Gel";
						$producto->impuesto1 = $impuesto1;
						$producto->divisa = $divisa;
						$producto->precio = $precio;
						$producto->precio2 = $precio2;
						$producto->ultimo_costo = $ultimo_costo;
						$producto->clave_disenio = $claveDisenio;
						$producto->save();
						break;
					case 'SC':
						$producto->clave = $clave . $claveDisenio;
						$producto->description = $description . " Slim Case";
						$producto->codigo_barras = $codigo_barras;
						$producto->unidad = $unidad;
						$producto->marca = $marca;
						$producto->modelo = $modelo;
						$producto->clave_familia = "SC";
						$producto->familia = "Slim Case";
						$producto->impuesto1 = $impuesto1;
						$producto->divisa = $divisa;
						$producto->precio = $precio;
						$producto->precio2 = $precio2;
						$producto->ultimo_costo = $ultimo_costo;
						$producto->clave_disenio = $claveDisenio;
						$producto->save();
						break;
					case 'TD':
						$producto->clave = "TD-" . $clave . $claveDisenio;
						$producto->description = $description . " Jelly Case";
						$producto->codigo_barras = $codigo_barras;
						$producto->unidad = $unidad;
						$producto->marca = $marca;
						$producto->modelo = $modelo;
						$producto->clave_familia = "TD";
						$producto->familia = "Jelly Case";
						$producto->impuesto1 = $impuesto1;
						$producto->divisa = $divisa;
						$producto->precio = $precio;
						$producto->precio2 = $precio2;
						$producto->ultimo_costo = $ultimo_costo;
						$producto->clave_disenio = $clave_disenio;
						$producto->save();
						break;
				}

			}
		}
	}
	public function descargaArchivo()
	{
		//esta aprte descarga el archivo con los datos, solo falta jalarlos de la base de datos para despues guardarlos
		//preguntar sobre los diferentes precios para diferentes tipos de articulos
		$result = \App\ArticulosSait::where('exportado', 0)->get();

		if(!$result->isEmpty())
		{
			\Excel::create('export_sait', function($excel) use ($result) {

		    	$excel->sheet('Articulos', function($sheet) use ($result) {
					$cont = 1;



					$rowArray = array(
							"Clave de Articulo", 
							"Descripcion", 
							"Clave de Familia", 
							"Familia", 
							"impuesto1",
							"numprov",
							"numprov1",
							"numprov2",
							"numprov3",
							"divisa",
							"preciopub", 
							"precio1",
							"precio2",
							"precio3",
							"precio4",
							"precio5"
					);
					$sheet->row($cont, $rowArray);
					$cont++;

					foreach($result as $row)
					{
						$diseño = \App\Disenio::where('clave', $row->clave_disenio)->get();
						$rowArray = array(
							$row->clave,
							$row->description . " " . $diseño[0]->nombre,
							$row->clave_familia,
							$row->familia,
							$row->impuesto1,
							$row->numero_proveedor,
							$row->numero_proveedor2,
							$row->numero_proveedor3,
							$row->numero_proveedor4,
							$row->divisa,
							0,
							$row->precio,
							$row->precio2,
							$row->precio3,
							$row->precio4,
							$row->precio5
						);
						$row->exportado = 1;
						$sheet->row($cont, $rowArray);
						$cont++;
						\App\ArticulosSait::where('clave', $row->clave)->update(['exportado' => 1]);
					}
					
				});

			})->download('xls');	
		}
	}
}





/*
	foreach para los articulos cuando vienen desde los campos donde se ingreza todo
foreach($tipos as $tipo)
				{
					$preciopub = $precio * $impuesto1 + $precio;
					switch($tipo)
					{
						case 'A':
							$rowArray = array(
									$clave . "A", 
									$description, 
									"A", 
									"Rudo", 
									$impuesto1,
									$numero_proveedor,
									$numero_proveedor2,
									$numero_proveedor3,
									$numero_proveedor4,
									$divisa,
									$preciopub, 
									$precio,
									$precio2,
									$precio3,
									$precio4,
									$precio5
							);
						break;
						case 'C':
							$rowArray = array(
									"C-$clave", 
									$description, 
									"C", 
									"Cartera", 
									$impuesto1,
									$numero_proveedor,
									$numero_proveedor2,
									$numero_proveedor3,
									$numero_proveedor4,
									$divisa,
									$preciopub, 
									$precio,
									$precio2,
									$precio3,
									$precio4,
									$precio5
							);
						break;
						case 'DP':
							$rowArray = array(
									"DP-$clave", 
									$description, 
									"DP", 
									"Dual Pro", 
									$impuesto1,
									$numero_proveedor,
									$numero_proveedor2,
									$numero_proveedor3,
									$numero_proveedor4,
									$divisa,
									$preciopub, 
									$precio,
									$precio2,
									$precio3,
									$precio4,
									$precio5
							);
						break;
						case 'HG':
							$rowArray = array(
									"HG-$clave", 
									$description, 
									"HG", 
									"Glitter", 
									$impuesto1,
									$numero_proveedor,
									$numero_proveedor2,
									$numero_proveedor3,
									$numero_proveedor4,
									$divisa,
									$preciopub, 
									$precio,
									$precio2,
									$precio3,
									$precio4,
									$precio5
							);
						break;
						case 'HY':
							$rowArray = array(
									"HY-$clave", 
									$description, 
									"HY", 
									"Hibrido", 
									$impuesto1,
									$numero_proveedor,
									$numero_proveedor2,
									$numero_proveedor3,
									$numero_proveedor4,
									$divisa,
									$preciopub, 
									$precio,
									$precio2,
									$precio3,
									$precio4,
									$precio5
							);
						break;
						case 'RC':
							$rowArray = array(
									"RC-$clave", 
									$description, 
									"RC", 
									"Rubber Case", 
									$impuesto1,
									$numero_proveedor,
									$numero_proveedor2,
									$numero_proveedor3,
									$numero_proveedor4,
									$divisa,
									$preciopub, 
									$precio,
									$precio2,
									$precio3,
									$precio4,
									$precio5
							);
						break;
						case 'RG':
							$rowArray = array(
									"RG-$clave", 
									$description, 
									"RG", 
									"Rubber Gel", 
									$impuesto1,
									$numero_proveedor,
									$numero_proveedor2,
									$numero_proveedor3,
									$numero_proveedor4,
									$divisa,
									$preciopub, 
									$precio,
									$precio2,
									$precio3,
									$precio4,
									$precio5
							);
						break;
						case 'SC':
							$rowArray = array(
									"$clave", 
									$description, 
									"SC", 
									"Case Slim", 
									$impuesto1,
									$numero_proveedor,
									$numero_proveedor2,
									$numero_proveedor3,
									$numero_proveedor4,
									$divisa,
									$preciopub, 
									$precio,
									$precio2,
									$precio3,
									$precio4,
									$precio5
							);
						break;
						case 'TD':
							$rowArray = array(
									"TD-$clave", 
									$description, 
									"TD", 
									"Jelly Case", 
									$impuesto1,
									$numero_proveedor,
									$numero_proveedor2,
									$numero_proveedor3,
									$numero_proveedor4,
									$divisa,
									$preciopub, 
									$precio,
									$precio2,
									$precio3,
									$precio4,
									$precio5
							);
						break;
					}
					$sheet->row($cont, $rowArray);
					$cont++;
				}	*/