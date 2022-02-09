<?php

namespace App\Http\Controllers;
use App\Models\puntodv;
use App\Models\asesorcom;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    
    public function index()
    {    
        return view ('/welcome');
    }

    public function consultapdv(Request $request)
    {
        
        $texto =($request->get('texto'));
        //$texto1 =($request->get('texto1'));        
        $consulta=DB::table('puntos_venta')
                    ->select('pdv_ide','pdv_nombre')
                    ->where('pdv_ide', 'LIKE', '%'.$texto.'%')
                    ->paginate(1);                   
        return view('curso.registro', compact('consulta', 'texto'));      
    }

    public function consultaasc(Request $request)
    {    
    $textou =($request->get('textou'));
        //$texto1 =($request->get('texto1'));        
        $consultau=DB::table('asesores_comerciales')
                    ->select('asc_ide','asc_nombre','asc_apellido')
                    ->where('asc_ide', 'LIKE', '%'.$textou.'%')
                    ->paginate(1);                   
        return view('curso.registro', compact('consultau', 'textou'));      
    }

}
