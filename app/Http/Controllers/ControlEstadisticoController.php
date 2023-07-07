<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\estructura_cambio;
use Illuminate\Support\Facades\DB;

class ControlEstadisticoController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Estadisticas.Index');
    }

    public function meses(){
        $meses = estructura_cambio::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(f_nacimiento) as month_name"))->groupBy(DB::raw("month_name"))->orderBy('id','ASC')->pluck('count', 'month_name');
        $labels = $meses->keys();
        $data = $meses->values();

        return view('Estadisticas.meses', compact('labels','data'));
    }

    public function seccion(){
        $seccionMujer = estructura_cambio::select(DB::raw("COUNT(*) as count"), DB::raw("seccion as seccion"))->where('sexo','MUJER')->groupBy(DB::raw("seccion"))->orderBy('id','ASC')->pluck('count', 'seccion');
        $seccionHombre = estructura_cambio::select(DB::raw("COUNT(*) as count"), DB::raw("seccion as seccion"))->where('sexo','HOMBRE')->groupBy(DB::raw("seccion"))->orderBy('id','ASC')->pluck('count', 'seccion');
        
        $labelsMujer = $seccionMujer->keys();
        $dataMujer = $seccionMujer->values();
        $labelsHombre = $seccionHombre->keys();
        $dataHombre = $seccionHombre->values();

        return view('Estadisticas.seccion', compact('labelsMujer','dataMujer','labelsHombre','dataHombre'));
    }

    public function colonia(){
        $colonia = estructura_cambio::select(DB::raw("COUNT(*) as count"), DB::raw("colonia as colonia"))->groupBy(DB::raw("colonia"))->orderBy('id','ASC')->pluck('count', 'colonia');
        $labels = $colonia->keys();
        $data = $colonia->values();

        return view('Estadisticas.colonia', compact('labels', 'data'));
    }

    public function sexo(){
        $sexo = estructura_cambio::select(DB::raw("COUNT(*) as count"), DB::raw("sexo as sexo"))->groupBy(DB::raw("sexo"))->orderBy('id','ASC')->pluck('count', 'sexo');
        $labels = $sexo->keys();
        $data = $sexo->values();

        return view('Estadisticas.sexo', compact('labels', 'data'));
    }

    public function genero(){
        $genero = estructura_cambio::select(DB::raw("COUNT(*) as count"), DB::raw("genero as genero"))->groupBy(DB::raw("genero"))->orderBy('id','ASC')->pluck('count', 'genero');
        $labels = $genero->keys();
        $data = $genero->values();

        return view('Estadisticas.genero', compact('labels', 'data'));
    }

    public function estatus(){
        $estatus = estructura_cambio::select(DB::raw("COUNT(*) as count"), DB::raw("estatus as estatus"))->groupBy(DB::raw("estatus"))->orderBy('id','ASC')->pluck('count', 'estatus');
        $labels = $estatus->keys();
        $data = $estatus->values();

        return view('Estadisticas.estatus', compact('labels', 'data'));
    }

    public function tipo(){
        $tipos = estructura_cambio::select(DB::raw("COUNT(*) as count"), DB::raw("tipo as tipo"))->groupBy(DB::raw("tipo"))->orderBy('id','ASC')->pluck('count', 'tipo');
        $labels = $tipos->keys();
        $data = $tipos->values();

        return view('Estadisticas.tipos', compact('labels', 'data'));
    }

    public function estructuras(){
        $estructuras = estructura_cambio::select(DB::raw("COUNT(*) as count"), DB::raw("estructuras as estructuras"))->groupBy(DB::raw("estructuras"))->orderBy('id','ASC')->pluck('count', 'estructuras');
        $labels = $estructuras->keys();
        $data = $estructuras->values();

        return view('Estadisticas.estructura', compact('labels', 'data'));
    }
}
