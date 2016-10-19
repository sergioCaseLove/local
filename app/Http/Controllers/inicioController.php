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
	public function codigoReferido()
	{
		$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 'a', 'b', 'c', 'd', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
		$cant = 0;
		$usuario = new \App\Usuario;
		do
		{
			$codigo = $arr[rand(0, 34)] . '' . $arr[rand(0, 34)] . '' . $arr[rand(0, 34)] . '' . $arr[rand(0, 34)] . '' . $arr[rand(0, 34)] . '' . $arr[rand(0, 34)];
			$cant = \App\Usuario::where('codigo', $codigo)->count();
		}
		while($cant > 0);
		$usuario->codigoReferido = $codigo;
		$usuario->save();
		return $codigo;
		
	}
	public function codigoTodos()
	{
		//dd(\DB::getQueryLog());
		//\DB::enableQueryLog();
		//return 1;
		$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 'a', 'b', 'c', 'd', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
		$usuarios = \App\Usuario::get();
		//return $usuarios;
		$usrd = array();
		foreach($usuarios as $usuario)
		{
			if($usuario->codigoReferido == null)
			{
				$codigo = $arr[rand(0, 34)] . '' . $arr[rand(0, 34)] . '' . $arr[rand(0, 34)] . '' . $arr[rand(0, 34)] . '' . $arr[rand(0, 34)] . '' . $arr[rand(0, 34)];
				$usuario->codigoReferido = $codigo;
				$usuario->save();
				//$usrd = \App\Usuario::where('id', $usuario->idUsuario)->update(['codigoReferido', $codigo]);
			}
		}
		return $usuarios;
	}
	public function muestraImagen(Request $request)
	{
		//return view('muestraImagen');
		$file = $request->input('val');
		$file = str_replace('\\', '/', $file);
		
		$cmX = 7.7973;
    	$cmY = 15.4691;

    	$pixelX = $cmX * 37.795275591;
    	$pixelY = $cmY * 37.795275591;

    	$tamaño = array('ancho' => $pixelX, 'alto' => $pixelY);

		return view('muestraImagen', ['img' => $file,'tamaño' => $tamaño]);
		/*if(!\File::exists($file))
		{
			return ':v';
		}
		else{
			//$img = \Image::make($file);
    		$cmX1 = 7.7973;
	    	$cmY1 = 15.4691;

	    	$cmX = 5.9796;
	    	$cmY = 11.238;

	    	$pixelX = $cmX * 37.795275591;
	    	$pixelY = $cmY * 37.795275591;
	    	$pixelX1 = $cmX1 * 37.795275591;
	    	$pixelY1 = $cmY1 * 37.795275591;

    		$img = \Image::make($file)->resize($pixelX1, $pixelY1);
			$type = explode('.', $file);
    		$img->encode($type[1]);

    		$img = 'data:image/' . $type[1] . ';base64,' . base64_encode($img);
			//return $img;
			//return '<img src="' . $img . '"/>';
			return view('muestraImagen', ['img' => $img]);
			//return $img;
			//return (string)\File::exists($file);
		}*/
	}
	public function colleccion(Request $request)
	{
		ini_set('memory_limit', '-1');
		$files = \File::allFiles('images\\' . $request->input('val'));
		/*$cont = 0;
		$filesArray = array();
		foreach ($files as $key => $file)
		{
			$filesArray[$cont++] = (string) $file;
		}
		return $filesArray;*/
		$cont = 0;
		foreach ($files as $key => $file)
		{
			//return $file;
    		$img = \Image::make((string)$file);
    		//$img = $img->resize($img->height() * 0.5, $img->width() * 0.5);
    		//$tmpFile = explode('-', $file);
    		$type = explode('.', $file);
    		$img->encode($type[1]);
			$base64[$cont]['img'] = 'data:image/' . $type[1] . ';base64,' . base64_encode($img);
			$base64[$cont]['val'] = $file;
    		$cont++;
		    //$dirArray[$key] = (string)$file;
		}
		/*$cmX1 = 7.7973;
    	$cmY1 = 15.4691;

    	$cmX = 5.9796;
    	$cmY = 11.238;

    	$pixelX = $cmX * 37.795275591;
    	$pixelY = $cmY * 37.795275591;
    	$pixelX1 = $cmX1 * 37.795275591;
    	$pixelY1 = $cmY1 * 37.795275591;

    	$img = \Image::make('images/capas/GK-3.jpg')->resize($pixelX1, $pixelY1);
    	$img2 = \Image::make('images/capas/GK-3.jpg')->resize($pixelX, $pixelY);
    	//return $img->response('jpg');
    	$img->encode('jpg');
    	$img2->encode('jpg');
    	$type = 'jpg';
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
		$base642 = 'data:image/' . $type . ';base64,' . base64_encode($img2);*/
    	return view('coleccion', ['imgs' => $base64, 'coleccion' => $request->input('val')]);
	}
	public function preView()
	{
		    //$imagick = new \Imagick('images/back-bladel2plus.png');
		    //echo Response::make(readfile('images/back-bladel2plus.png', 200))->header('Content-Type', 'image/png');
		
		/*
			
    		return $img->response('jpg');
		*/
    	//$img = \Image::make('images/wea_123.png');

		$files = \File::allFiles('images/portadas');
		$dirArray = array();
    	$type = 'png';
		$cont = 0;
		foreach ($files as $key => $file)
		{
    		$img = \Image::make((string)$file);
    		$tmpFile = explode('-', $file);
    		$tmpFile = explode('.', $tmpFile[1]);
    		$img->encode('png');
			$base64[$cont]['img'] = 'data:image/' . $type . ';base64,' . base64_encode($img);
			$base64[$cont]['val'] = $tmpFile[0];
    		$cont++;
		    //$dirArray[$key] = (string)$file;
		}
		return view('preview', ['imgs' => $base64]);
    	$cmX = 7.7973;
    	$cmY = 15.4691;

    	//$cmX = 5.9796;
    	//$cmY = 11.238;

    	$pixelX = $cmX * 37.795275591;
    	$pixelY = $cmY * 37.795275591;

    	$img = \Image::make('images/wea_123.png')->resize($pixelX, $pixelY);
    	$img2 = \Image::make('images/template-bladel2plus.png')->resize($pixelX, $pixelY);
    	//return $img->response('jpg');
    	$img->encode('png');
    	$img2->encode('png');
    	$type = 'png';
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
		$base642 = 'data:image/' . $type . ';base64,' . base64_encode($img2);
    	return view('preview', ['img' => $base64, 'img2' => $base642]);
		//$response = Response::make(readfile("images/back-bladel2plus.png"));
		//$response->header('Content-Type', 'image/png');
		//return $response;
		//$datetime = DateTime::createFromFormat('YmdHi', mktime());
		//return $datetime->format('D');
		//return time();
		//\App\ArticulosSait::where('description', 'Galaxy A3 Slim Case')->update(['unidad' => 'PZA']);
		//$prod = \App\ArticulosSait::where('exportado', 0)->get();
		//return $prod;
		//$manager = new ImageManager(array('driver' => 'imagick'));
		//$image = $manager->make('images/back-bladel2plus.png')->resize(300, 200);

		//return $image;
	}
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
		set_time_limit(60*60);
		$tipos = $request->input('tipos');
		$cats = $request->input('cats');
		$catArray = array();
		foreach($cats as $cat)
		{
			$all_cats = \App\Catalago::where('clave_catalago', $cat)->get();
			$cont = 0;
			foreach ($all_cats as $value) {
				$catArray[$cat][$cont] = $value;
				$cont++;
			}
		}

		//$clave = $request->input('clave');
		$claves = $request->input('baia');
		$description = $request->input('description');
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
							//return $catArray['A6'][0]['consecutivo'];
		foreach($claves as $clave)
		{

			foreach($tipos as $tipo)
			{
				switch($tipo)
				{
					case 'A':
						foreach($catArray as $key => $cat)
						{
							foreach($cat as $ca)
							{
								$modelo = \App\Modelo::where('clave', $clave)->get();
								$producto = new \App\ArticulosSait;

								//$producto->clave = 'A-' . $clave . '-' . $key . '-' . $ca['consecutivo'];
								$producto->description = $modelo[0]->descripcion . " Uso Rudo";
								$producto->codigo_barras = 'A-' . $clave . '-' . $key . '-' . $ca['consecutivo'];
								$producto->unidad = $unidad;
								$producto->marca = $marca;
								$producto->modelo = $modelo[0]->descripcion;
								$producto->clave_familia = "A";
								$producto->familia = "Uso Rudo";
								$producto->impuesto1 = $impuesto1;
								$producto->divisa = $divisa;
								$producto->precio = $precio;
								$producto->precio2 = $precio2;
								$producto->precio3 = $precio3;
								$producto->precio4 = $precio4;
								$producto->precio5 = $precio5;
								$producto->ultimo_costo = $ultimo_costo;
								$producto->clave_disenio = $key;
								$producto->save();
							}
						}
						break;
					case 'C':
						foreach($catArray as $key => $cat)
						{
							foreach($cat as $ca)
							{
								$modelo = \App\Modelo::where('clave', $clave)->get();
								$producto = new \App\ArticulosSait;

								//$producto->clave = 'C-' . $clave . '-' . $key . '-' . $ca['consecutivo'];
								$producto->description =  $modelo[0]->descripcion . " Cartera";
								$producto->codigo_barras = 'C-' . $clave . '-' . $key . '-' . $ca['consecutivo'];
								$producto->unidad = $unidad;
								$producto->marca = $marca;
								$producto->modelo = $modelo[0]->descripcion;
								$producto->clave_familia = "C";
								$producto->familia = "Cartera";
								$producto->impuesto1 = $impuesto1;
								$producto->divisa = $divisa;
								$producto->precio = $precio;
								$producto->precio2 = $precio2;
								$producto->precio3 = $precio3;
								$producto->precio4 = $precio4;
								$producto->precio5 = $precio5;
								$producto->ultimo_costo = $ultimo_costo;
								$producto->clave_disenio = $key;
								$producto->save();

							}
						}
						break;
					case 'DP':
						foreach($catArray as $key => $cat)
						{
							foreach($cat as $ca)
							{
								$modelo = \App\Modelo::where('clave', $clave)->get();
								$producto = new \App\ArticulosSait;

								//$producto->clave = 'DP-' . $clave . '-' . $key . '-' . $ca['consecutivo'];
								$producto->description = $modelo[0]->descripcion . " Dual Pro";
								$producto->codigo_barras = 'DP-' . $clave . '-' . $key . '-' . $ca['consecutivo'];
								$producto->unidad = $unidad;
								$producto->marca = $marca;
								$producto->modelo = $modelo[0]->descripcion;
								$producto->clave_familia = "DP";
								$producto->familia = "Dual Pro";
								$producto->impuesto1 = $impuesto1;
								$producto->divisa = $divisa;
								$producto->precio = $precio;
								$producto->precio2 = $precio2;
								$producto->precio3 = $precio3;
								$producto->precio4 = $precio4;
								$producto->precio5 = $precio5;
								$producto->ultimo_costo = $ultimo_costo;
								$producto->clave_disenio = $key;
								$producto->save();

							}
						}
						break;
					case 'HG':
						foreach($catArray as $key => $cat)
						{
							foreach($cat as $ca)
							{
								$modelo = \App\Modelo::where('clave', $clave)->get();
								$producto = new \App\ArticulosSait;

								//$producto->clave = 'HG-' . $clave . '-' . $key . '-' . $ca['consecutivo'];
								$producto->description = $modelo[0]->descripcion . " Glitter";
								$producto->codigo_barras = 'HG-' . $clave . '-' . $key . '-' . $ca['consecutivo'];
								$producto->unidad = $unidad;
								$producto->marca = $marca;
								$producto->modelo = $modelo[0]->descripcion;
								$producto->clave_familia = "HG";
								$producto->familia = "Glitter";
								$producto->impuesto1 = $impuesto1;
								$producto->divisa = $divisa;
								$producto->precio = $precio;
								$producto->precio2 = $precio2;
								$producto->precio3 = $precio3;
								$producto->precio4 = $precio4;
								$producto->precio5 = $precio5;
								$producto->ultimo_costo = $ultimo_costo;
								$producto->clave_disenio = $key;
								$producto->save();

							}
						}
						break;
					case 'HY':
						foreach($catArray as $key => $cat)
						{
							foreach($cat as $ca)
							{
								$modelo = \App\Modelo::where('clave', $clave)->get();
								$producto = new \App\ArticulosSait;

								//$producto->clave = 'HY-' . $clave . '-' . $key . '-' . $ca['consecutivo'];
								$producto->description = $modelo[0]->descripcion . " Hibrido";
								$producto->codigo_barras = 'HY-' . $clave . '-' . $key . '-' . $ca['consecutivo'];
								$producto->unidad = $unidad;
								$producto->marca = $marca;
								$producto->modelo = $modelo[0]->descripcion;
								$producto->clave_familia = "HY";
								$producto->familia = "Hibrido";
								$producto->impuesto1 = $impuesto1;
								$producto->divisa = $divisa;
								$producto->precio = $precio;
								$producto->precio2 = $precio2;
								$producto->precio3 = $precio3;
								$producto->precio4 = $precio4;
								$producto->precio5 = $precio5;
								$producto->ultimo_costo = $ultimo_costo;
								$producto->clave_disenio = $key;
								$producto->save();

							}
						}
						break;
					case 'RC':
						foreach($catArray as $key => $cat)
						{
							foreach($cat as $ca)
							{
								$modelo = \App\Modelo::where('clave', $clave)->get();
								$producto = new \App\ArticulosSait;

								//$producto->clave = 'RC-' . $clave . '-' . $key . '-' . $ca['consecutivo'];
								$producto->description = $modelo[0]->descripcion . " Rubber Case";
								$producto->codigo_barras = 'RC-' . $clave . '-' . $key . '-' . $ca['consecutivo'];
								$producto->unidad = $unidad;
								$producto->marca = $marca;
								$producto->modelo = $modelo[0]->descripcion;
								$producto->clave_familia = "RC";
								$producto->familia = "Rubber Case";
								$producto->impuesto1 = $impuesto1;
								$producto->divisa = $divisa;
								$producto->precio = $precio;
								$producto->precio2 = $precio2;
								$producto->precio3 = $precio3;
								$producto->precio4 = $precio4;
								$producto->precio5 = $precio5;
								$producto->ultimo_costo = $ultimo_costo;
								$producto->clave_disenio = $key;
								$producto->save();

							}
						}
						break;
					case 'RG':
						foreach($catArray as $key => $cat)
						{
							foreach($cat as $ca)
							{
								$modelo = \App\Modelo::where('clave', $clave)->get();
								$producto = new \App\ArticulosSait;

								//$producto->clave = 'RG-' . $clave . '-' . $key . '-' . $ca['consecutivo'];
								$producto->description = $modelo[0]->descripcion . " Rubber Gel";
								$producto->codigo_barras = 'RG-' . $clave . '-' . $key . '-' . $ca['consecutivo'];
								$producto->unidad = $unidad;
								$producto->marca = $marca;
								$producto->modelo = $modelo[0]->descripcion;
								$producto->clave_familia = "RG";
								$producto->familia = "Rubber Gel";
								$producto->impuesto1 = $impuesto1;
								$producto->divisa = $divisa;
								$producto->precio = $precio;
								$producto->precio2 = $precio2;
								$producto->precio3 = $precio3;
								$producto->precio4 = $precio4;
								$producto->precio5 = $precio5;
								$producto->ultimo_costo = $ultimo_costo;
								$producto->clave_disenio = $key;
								$producto->save();

							}
						}
						break;
					case 'SC':
						foreach($catArray as $key => $cat)
						{
							foreach($cat as $ca)
							{
								$modelo = \App\Modelo::where('clave', $clave)->get();
								$producto = new \App\ArticulosSait;

								//$producto->clave = 'SC-' . $clave . '-' . $key . '-' . $ca['consecutivo'];
								$producto->description = $modelo[0]->descripcion . " Slim Case";
								$producto->codigo_barras = 'SC-' . $clave . '-' . $key . '-' . $ca['consecutivo'];
								$producto->unidad = $unidad;
								$producto->marca = $marca;
								$producto->modelo = $modelo[0]->descripcion;
								$producto->clave_familia = "SC";
								$producto->familia = "Slim Case";
								$producto->impuesto1 = $impuesto1;
								$producto->divisa = $divisa;
								$producto->precio = $precio;
								$producto->precio2 = $precio2;
								$producto->precio3 = $precio3;
								$producto->precio4 = $precio4;
								$producto->precio5 = $precio5;
								$producto->ultimo_costo = $ultimo_costo;
								$producto->clave_disenio = $key;
								$producto->save();

							}
						}
						break;
					case 'TD':
						foreach($catArray as $key => $cat)
						{
							foreach($cat as $ca)
							{
								$modelo = \App\Modelo::where('clave', $clave)->get();
								$producto = new \App\ArticulosSait;

								//$producto->clave = 'TD-' . $clave . '-' . $key . '-' . $ca['consecutivo'];
								$producto->description = $modelo[0]->descripcion . " Jelly Case";
								$producto->codigo_barras = 'TD-' . $clave . '-' . $key . '-' . $ca['consecutivo'];
								$producto->unidad = $unidad;
								$producto->marca = $marca;
								$producto->modelo = $modelo[0]->descripcion;
								$producto->clave_familia = "TD";
								$producto->familia = "Jelly Case";
								$producto->impuesto1 = $impuesto1;
								$producto->divisa = $divisa;
								$producto->precio = $precio;
								$producto->precio2 = $precio2;
								$producto->precio3 = $precio3;
								$producto->precio4 = $precio4;
								$producto->precio5 = $precio5;
								$producto->ultimo_costo = $ultimo_costo;
								$producto->clave_disenio = $key;
								$producto->save();

							}
						}
						break;
				}

			}
		}
	}
	public function sendMail()
	{
		set_time_limit(60*60);
		    $data = array(
		        'name' => "Learning Laravel",
		    );

		    \Mail::send('emails.welcome', $data, function ($message) {

		        $message->from('ordena@lovecaselove.com', 'Learning Laravel');

		        $message->to('sergio@lovecaselove.com')->subject('Learning Laravel test email');

		    });

		    return "Your email has been sent successfully";
	}
	public function descargaArchivo()
	{
		set_time_limit(60*60);
		//esta aprte descarga el archivo con los datos, solo falta jalarlos de la base de datos para despues guardarlos
		//preguntar sobre los diferentes precios para diferentes tipos de articulos
		//si hay muchos articulos en la base la app manda error
		//$result = \App\ArticulosSait::where('exportado', 0)->take(1000)->get();
		//return \App\ArticulosSait::where('exportado', 0)->count();	



		/*
			para exportar es mas o menos una hora por cada 10000 elementos
			checar exportando a archivos de texto a ver si hay alguna diferencia
			si no ver si desde el cpanel piedo exportar directo para excel

			si se puede igual se va a tardar un chingo :v

			si esto llegara a ser poco viable checar con otro lenguaje de programacion

			mandar correo con las cosas que se hicieron a gera :v
		*/


		if(\App\ArticulosSait::where('exportado', 0)->count() > 0)
		{
			\Excel::create('export_sait', function($excel){

		    	$excel->sheet('Articulos', function($sheet){
					$cont = 1;


/*
					$rowArray = array(
							"Clave de Articulo", 
							"Codigo de Barras", 
							"Descripcion", 
							"Clave de Familia"
							"impuesto1",
							"divisa",
							"preciopub", 
							"precio1",
							"precio2"
					);
					$sheet->row($cont, $rowArray);
					$cont++;*/

					while(\App\ArticulosSait::where('exportado', 0)->count() > 0)
					{
						$result = \App\ArticulosSait::where('exportado', 0)->take(1000)->get();
						foreach($result as $row)
						{

							$rowArray = array(
								$row->codigo_barras,
								$row->codigo_barras,
								$row->description,
								$row->clave_familia,
								$row->impuesto1,
								$row->divisa,
								$row->precio * ($row->impuesto1 * 0.01) + $row->precio,
								$row->precio,
								$row->precio2
							);
							$row->exportado = 1;
							$sheet->row($cont, $rowArray);
							$cont++;
							\App\ArticulosSait::where('codigo_barras', $row->codigo_barras)->update(['exportado' => 1]);
						}

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
									$modelo[0]->descripcion, 
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