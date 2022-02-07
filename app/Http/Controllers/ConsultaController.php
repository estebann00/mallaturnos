<?php

namespace App\Http\Controllers;
use App\Models\Consulta;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    
    
        $texto =($request->get('texto')); 

        $consulta=DB::table('puntos_venta')
                    ->select('pdv_ide','pdv_nombre','pdv_direccion')
                    ->where('pdv_ide', 'LIKE', '%'.$texto.'%')
                    ->paginate(10);

        return view('curso.registro', compact('consulta', 'texto'));
        //return view('curso.registro', compact('consulta'));

        //$buscador=$request()->get('buscador');
        //$Consulta = consulta::where('pdv_ide', 'LIKE','%'. $buscador. '%');
        //return view('/principal',['consulta'=>$Consulta,'buscador'=>$buscador]);
    }
}


