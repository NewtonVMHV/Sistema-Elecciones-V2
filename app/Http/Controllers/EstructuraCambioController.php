<?php

namespace App\Http\Controllers;

use App\Models\Estructura_cambio;
use App\Models\Tipos;
use App\Models\Estatus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstructuraCambioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:estructura-list|estructura-create|estructura-filter|estructura-edit|estructura-delete', ['only' => ['index','store']]);
        $this->middleware('permission:estructura-create', ['only' => ['create','store']]);
        $this->middleware('permission:estructura-filter', ['only' => ['filter','filterEstructura']]);
        $this->middleware('permission:estructura-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:estructura-delete', ['only' => ['eliminar','destroy']]);
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $buscapor = $request->get('buscar');
        $tipos = Tipos::all();
        $estatus = Estatus::all();
        $estructura_cambio = Estructura_cambio::where('clave','LIKE','%'.$buscapor.'%')->
                                                        Orwhere('clave_elector','LIKE','%'.$buscapor.'%')->
                                                        Orwhere('nombre','LIKE','%'.$buscapor.'%')->
                                                        Orwhere('a_paterno','LIKE','%'.$buscapor.'%')->
                                                        Orwhere('a_materno','LIKE','%'.$buscapor.'%')->
                                                        Orwhere('colonia','LIKE','%'.$buscapor.'%')->
                                                        Orwhere('curp','LIKE','%'.$buscapor.'%')
                                                        ->get();

        return view('Estructura.Index', compact('estructura_cambio','estatus','tipos'));
    }

    public function filter(Request $request){
        $buscaporseccion = $request->get('seccion');
        $buscaporapellido_paterno = $request->get('apellido_paterno');
        $buscaporapellido_materno = $request->get('apellido_materno');
        $buscaporf_nacimiento = $request->get('f_nacimiento');
        $buscaportipos = $request->get('tipos');
        $buscaporcolonia = $request->get('colonia');
        $buscaporestatus = $request->get('estatus');

        $tipos = Tipos::all();
        $estatus = Estatus::all();
        $estructura_cambio = estructura_cambio::where('seccion','LIKE','%'.$buscaporseccion.'%')->
                                                        where('a_paterno','LIKE','%'.$buscaporapellido_paterno.'%')->
                                                        where('a_materno','LIKE','%'.$buscaporapellido_materno.'%')->
                                                        where('f_nacimiento','LIKE','%'.$buscaporf_nacimiento.'%')->
                                                        where('tipo','LIKE','%'.$buscaportipos.'%')->
                                                        where('colonia','LIKE','%'.$buscaporcolonia.'%')->
                                                        where('estatus','LIKE','%'.$buscaporestatus.'%')->get();

        return view('Estructura.Filter', compact('estructura_cambio','tipos','estatus'));
    }

    public function filterEstructura(Request $request){
        $estructura = $request->get('estructura');
        $estructura_cambio = estructura_cambio::where('estructuras','LIKE','%'.$estructura.'%')->get();
        return view('Estructura.FilterEstructura', compact('estructura_cambio'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $tipos = Tipos::all();
        $estatus = Estatus::all();
        return view('Estructura.Agregar',compact('tipos','estatus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'clave'=>'required',
            'seccion'=>'required',
            'nombre'=>'required',
            'a_paterno'=>'required',
            'a_materno'=>'required',
            'direccion'=>'required',
            'colonia'=>'required',
            'Cod_postal'=>'required',
            'curp'=>'required',
            'Clave_elector'=>'required',
            'f_nacimiento'=>'required',
            'tipo'=>'required',
            'sexo'=>'required',
            'estructura'=>'required'
        ]);

        $estructura_cambio = Estructura_cambio::create([
            'clave'=>$request->clave,
            'seccion'=>$request->seccion,
            'nombre'=>$request->nombre,
            'a_paterno'=>$request->a_paterno,
            'a_materno'=>$request->a_materno,
            'direccion'=>$request->direccion,
            'colonia'=>$request->colonia,
            'codigo_postal'=>$request->Cod_postal,
            'curp'=>$request->curp,
            'clave_elector'=>$request->Clave_elector,
            'f_nacimiento'=>$request->f_nacimiento,
            'tipo'=>$request->tipo,
            'correo'=>$request->correo,
            'facebook'=>$request->facebook,
            'telefono'=>$request->telefono,
            'celular'=>$request->celular,
            'estatus'=>$request->estatus,
            'sexo'=>$request->sexo,
            'genero'=>$request->genero,
            'estructuras'=>$request->estructura
        ]);

        return redirect()->route('Estructura.index')->with('success','Estrutura creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estructura_cambio $estructura_cambio)
    {
        //

        return view('Estructura.Show', compact('estructura_cambio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estructura_cambio $estructura_cambio)
    {
        //
        $tipos = tipos::all();
        $estatus = estatus::all();
        return view('Estructura.Editar',compact('estructura_cambio','tipos','estatus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estructura_cambio $estructura_cambio)
    {
        //
        $request->validate([
            'clave'=>'required',
            'seccion'=>'required',
            'nombre'=>'required',
            'a_paterno'=>'required',
            'a_materno'=>'required',
            'direccion'=>'required',
            'colonia'=>'required',
            'Cod_postal'=>'required',
            'curp'=>'required',
            'Clave_elector'=>'required',
            'f_nacimiento'=>'required',
            'tipo'=>'required',
            'sexo'=>'required',
            'estructura'=>'required',
        ]);

        $estructura_cambio->update([
            'clave'=>$request->clave,
            'seccion'=>$request->seccion,
            'nombre'=>$request->nombre,
            'a_paterno'=>$request->a_paterno,
            'a_materno'=>$request->a_materno,
            'direccion'=>$request->direccion,
            'colonia'=>$request->colonia,
            'codigo_postal'=>$request->Cod_postal,
            'curp'=>$request->curp,
            'clave_elector'=>$request->Clave_elector,
            'f_nacimiento'=>$request->f_nacimiento,
            'tipo'=>$request->tipo,
            'correo'=>$request->correo,
            'facebook'=>$request->facebook,
            'telefono'=>$request->telefono,
            'celular'=>$request->celular,
            'estatus'=>$request->estatus,
            'sexo'=>$request->sexo,
            'genero'=>$request->genero,
            'estructuras'=>$request->estructura
        ]);

        return redirect()->route('Estructura.index')->with('success','Estrutura actualizado exitosamente');
    }

    public function eliminar(Estructura_cambio $estructura_cambio){
        return view('Estructura.Eliminar', compact('estructura_cambio'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estructura_cambio $estructura_cambio)
    {
        //
        $estructura_cambio->delete();
        return redirect()->route('Estructura.index')->with('success','Estrutura eliminado exitosamente');
    }
}
