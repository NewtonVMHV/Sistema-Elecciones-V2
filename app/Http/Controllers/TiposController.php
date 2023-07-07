<?php

namespace App\Http\Controllers;

use App\Models\Tipos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TiposController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tipos = Tipos::all();
        return view('Administrador.Tipos.Index', compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Administrador.Tipos.Agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required'
        ]);

        $tipos = Tipos::create([
            'nombre' => $request->name
        ]);

        return redirect()->route('tipos.index')->with('success','Tipo creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tipos $tipos)
    {
        //
        return view('Administrador.Tipos.Show', compact('tipos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tipos $tipos)
    {
        //
        return view('Administrador.Tipos.Editar',compact('tipos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tipos $tipos)
    {
        //
        $request->validate([
            'name' => 'required'
        ]);

        $tipos->update([
            'nombre' => $request->name
        ]);

        return redirect()->route('tipos.index')->with('success','Tipo actualizado exitosamente');
    }

    public function eliminar(Tipos $tipos){
        return view('Administrador.Tipos.Eliminar',compact('tipos'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tipos $tipos)
    {
        //
        $tipos->delete();
        return redirect()->route('tipos.index')->with('success','Tipo eliminado exitosamente');
    }
}
