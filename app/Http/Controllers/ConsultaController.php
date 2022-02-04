<?php

namespace App\Http\Controllers;
use App\Models\Consulta;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    
    public function index(Request $request)
    {
        $buscar=trim($request->get('texto'));
        $consulta = DB::table('puntos_venta')
                      
                        ->select('pdv_ide','pdv_nombre')
                        ->where('pdv_ide','LIKE',"%$buscar%")
                        ->get();
        return view('curso.registro', compact('consulta'));
        //return view('curso.registro', compact('consulta'));

        //$buscador=$request()->get('buscador');
        //$Consulta = consulta::where('pdv_ide', 'LIKE','%'. $buscador. '%');
        //return view('/principal',['consulta'=>$Consulta,'buscador'=>$buscador]);
    }
}


