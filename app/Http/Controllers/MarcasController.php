<?php

namespace App\Http\Controllers;

use App\Models\Marcas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarcasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $marcas=DB::table('marcas')
        ->select('codigo','nombre')
        ->orderBy('codigo','desc')
        ->get();
        
        return view('marcas.show', ['marcas' => $marcas]);
  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marcas.create',['marcas'=> Marcas::all()]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'nombre' => 'required'
            ]);

            $marcas = new Marcas();

            $marcas->nombre=$request->input('nombre');   
            $marcas->save();
        return redirect("marcas");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('marcas.show');
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($codigo)
    {
        $marcas = Marcas::find($codigo);
        
        return view('marcas.update', ['marcas'=> $marcas]);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $codigo)
    {
        $request-> validate([
            'nombre' => 'required'
            ]);

            $marcas = Marcas::find($codigo);

            $marcas->nombre=$request->input('nombre');   
            $marcas->save();
        return redirect("marcas");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($codigo)
    {
        $marcas= Marcas::find($codigo);
        $marcas->delete();
        
        return redirect("marcas$marcas");
    }
}
