<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EditorController extends Controller
{
    public function getVendors()
    {
        $list = \File::directories('images/CasesSlim/');
        $arr = array();
        $cont = 0;
        foreach($list as $item)
        {
            $tmp = explode('\\', $item);
            $arr[$cont] = $tmp[1];
            $cont++;
        }
        return $arr;
    }
    public function getModels(Request $request)
    {
        $vendor = $request->input('vendor');
        $list = \File::directories('images/CasesSlim/' . $vendor);
        $arr = array();
        $cont = 0;
        foreach($list as $item)
        {
            $tmp = explode('\\', $item);
            $arr[$cont]['image'] = $tmp[1];
            $arr[$cont]['show'] = str_replace('-', ' ', $tmp[1]);
            $cont++;
        }
        return $arr;
    }
    public function getModelImages(Request $request)
    {
        $model = $request->input('model');
        $vendor = $request->input('vendor');
        $list = \File::allFiles('images/CasesSlim/' . $vendor . '/' .$model);
        $arr = array();
        $cont = 0;
        foreach($list as $item)
        {
            $arr[$cont] = (string) $item;
            $cont++;
        }
        return $arr;
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
}
