<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $categoriaa=DB::table('categorias')
        ->select('codigo','nombre')
        ->orderBy('codigo','desc')
        ->get();
        
        return view('categorias.show', ['categoriaa' => $categoriaa]);
 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create',['categoriaa'=> Categorias::all()]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'nombre' => 'required',
           
            ]);

            $categoriaa = new Categorias();

            $categoriaa->nombre=$request->input('nombre'); 
            
            $categoriaa->save();
        return redirect("categorias");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('categorias.show');
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($codigo)
    {
        $categoriaa = Categorias::find($codigo);
        
        return view('categorias.update', ['categoriaa'=> $categoriaa,]);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $codigo)
    {
        $request-> validate([
            'nombre' => 'required',
           
            ]);

            $categoriaa = Categorias::find($codigo);

            $categoriaa->nombre=$request->input('nombre'); 
            
            $categoriaa->save();
        return redirect("categorias");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($codigo)
    {
        $categoriaa= Categorias::find($codigo);
        $categoriaa->delete();
        
        return redirect("categorias");
    }
}
