<?php

namespace App\Http\Controllers;

use App\Models\Estructura_cambio;
use App\Models\Gestiones;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class GestionesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:gestiones-list|gestiones-export|gestiones-create|gestiones-filter|gestiones-edit|gestiones-delete', ['only' => ['index','store']]);
        $this->middleware('permission:gestiones-create', ['only' => ['create','store']]);
        $this->middleware('permission:gestiones-filter', ['only' => ['filter']]);
        $this->middleware('permission:gestiones-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:gestiones-export', ['only' => ['export']]);
        $this->middleware('permission:gestiones-delete', ['only' => ['eliminar','destroy']]);
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $buscapor = $request->get('buscar');
        $gestiones = Gestiones::where('NumeroGestion','LIKE','%'.$buscapor.'%')->Orwhere('clave','LIKE','%'.$buscapor.'%')->get();
        return view('Gestiones.Index', compact('gestiones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $contador = 0;
        $gestiones = Gestiones::all();
        foreach($gestiones as $id){
            $contador = $contador + 1;
        }
        $contador = $contador+1;
        return view('Gestiones.Agregar',compact('gestiones','contador'));
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
            'NumeroGestion'=>'required',
            'solicitud'=>'required',
            'fecha_solicitud'=>'required',
            'estatus'=>'required'
        ]);

        $gestiones = Gestiones::create([
            'clave'=>$request->clave,
            'seccion'=>$request->seccion,
            'nombre'=>$request->nombre,
            'a_paterno'=>$request->a_paterno,
            'a_materno'=>$request->a_materno,
            'NumeroGestion'=>$request->NumeroGestion,
            'solicitud'=>$request->solicitud,
            'fechasol'=>$request->fecha_solicitud,
            'respuesta'=>$request->respuesta,
            'fecharespuesta'=>$request->fecha_respuesta,
            'observaciones'=>$request->observaciones,
            'estatus'=>$request->estatus
        ]);

        return redirect()->route('Gestiones.index')->with('success','Gestión creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gestiones $gestiones)
    {
        //
        return view('Gestiones.Show',compact('gestiones'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gestiones $gestiones)
    {
        //
        return view('Gestiones.Editar',compact('gestiones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gestiones $gestiones)
    {
        //
        $request->validate([
            'clave'=>'required',
            'seccion'=>'required',
            'nombre'=>'required',
            'a_paterno'=>'required',
            'a_materno'=>'required',
            'NumeroGestion'=>'required',
            'solicitud'=>'required',
            'fecha_solicitud'=>'required',
            'estatus'=>'required'
        ]);

        $gestiones->update([
            'clave'=>$request->clave,
            'seccion'=>$request->seccion,
            'nombre'=>$request->nombre,
            'a_paterno'=>$request->a_paterno,
            'a_materno'=>$request->a_materno,
            'NumeroGestion'=>$request->NumeroGestion,
            'solicitud'=>$request->solicitud,
            'fechasol'=>$request->fecha_solicitud,
            'respuesta'=>$request->respuesta,
            'fecharespuesta'=>$request->fecha_respuesta,
            'observaciones'=>$request->observaciones,
            'estatus'=>$request->estatus
        ]);

        return redirect()->route('Gestiones.index')->with('success','Gestión actualizado exitosamente');
    }

    public function eliminar(Gestiones $gestiones){

        return view('Gestiones.Eliminar', compact('gestiones'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gestiones $gestiones)
    {
        //
        $gestiones->delete();
        return redirect()->route('Gestiones.index')->with('success','Gestión actualizado exitosamente');
    }

    public function filter(Request $request){
        $buscaporfecha = $request->get('fecha_de_solicitud');
        $buscaporfecharespuesta = $request->get('fecha_de_respuesta');
        $buscaporestatus = $request->get('estatus');
        $gestiones = Gestiones::where('fechasol','LIKE','%'.$buscaporfecha.'%')
                                ->where('fecharespuesta','LIKE','%'.$buscaporfecharespuesta.'%')
                                ->where('estatus','LIKE','%'.$buscaporestatus.'%')->get();
        return view('Gestiones.Filter', compact('gestiones'));
    }

    public function export(Request $request, Gestiones $gestiones){
        $pdf = PDF::loadView('Gestiones.Exportar',compact('gestiones'));
        return $pdf->download('Gestiones.pdf');
    }

    public function autocomplete(Request $request){
        $searchClave = $_GET['clave'];
        $valores = array();
        $valores['existe'] = 0;

        $resultados = Estructura_cambio::where('clave',$searchClave)->get();
        if (isset($_GET['buscar'])) {
            foreach ($resultados as $consulta) {
                $valores['existe'] = "1";
                $valores['seccion'] = $consulta['seccion'];
                $valores['nombre'] = $consulta['nombre'];
                $valores['a_paterno'] = $consulta['a_paterno'];		
                $valores['a_materno'] = $consulta['a_materno']; 
            }

            sleep(1);
            return  response()->json($valores); 
        }
    }
}
