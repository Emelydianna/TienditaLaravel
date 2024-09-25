<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientee = Clientes::select(
            "clientes.codigo",
            "clientes.nombre",
            "clientes.edad",
            "categorias.nombre as categoria"
            )
            ->join("categorias", "categorias.codigo", "=", "clientes.categoria")->get();
            return view('clientes.show')->with(['clientee'=>$clientee]);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create',['clientes' => Clientes::all(),'categorias' => Categorias::all()]);
   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'nombre'=> 'required',
            'edad'=> 'required',
            'categorias'=> 'required',
            
            ]);

            $clientee = new Clientes();

            $clientee->nombre=$request->input('nombre'); 
            $clientee->edad=$request->input('edad');  
            $clientee->categoria=$request->input('categorias');  
            
            $clientee->save();
        return redirect("clientes");
    }

    /**
     * Display the specified resource.
     */
    public function show(Clientes $clientes)
    {
        return view('clientes.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($codigo)
    {
        $clientee = Clientes::find($codigo);
        
        return view('clientes.update', ['clientee'=>$clientee, 'categorias' => Categorias::all()]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $codigo)
    {
        $request-> validate([
            'nombre'=> 'required',
            'edad'=> 'required',
            'categorias'=> 'required',
            
            ]);

            $clientee = Clientes::find($codigo);

            $clientee->nombre=$request->input('nombre'); 
            $clientee->edad=$request->input('edad');  
            $clientee->categoria=$request->input('categorias');  
            
            $clientee->save();
        return redirect("clientes");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($codigo)
    {
        $clientee= Clientes::find($codigo);
        $clientee->delete();
        
        return redirect("clientes");
    }
}
