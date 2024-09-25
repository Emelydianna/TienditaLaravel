<?php

namespace App\Http\Controllers;

use App\Models\Marcas;
use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $productos = Productos::select(
            "productos.codigo",
            "productos.nombre",
            "productos.precio",
            "marcas.nombre as marca"
            )
            ->join("marcas", "marcas.codigo", "=", "productos.marca")->get();
            return view('productos.show')->with(['productos'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create',['marca' => Marcas::all()]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'nombre' => 'required',
            'precio'  => 'required',
            'marca'  => 'required',
            ]);

            $productos = new Productos();

            $productos->nombre=$request->input('nombre'); 
            $productos->precio=$request->input('precio');    
            $productos->marca=$request->input('marca');    
            $productos->save();
        return redirect("productos");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('productos.show');
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($codigo)
    {
        $productos = Productos::find($codigo);
        
        return view('productos.update', ['productos'=> $productos,'marcas' => Marcas::all()]);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $codigo)
    {
        $request-> validate([
            'nombre' => 'required',
            'precio'  => 'required',
            'marca'  => 'required',
            ]);

            $productos = Productos::find($codigo);

            $productos->nombre=$request->input('nombre'); 
            $productos->precio=$request->input('precio');    
            $productos->marca=$request->input('marca');    
            $productos->save();
        return redirect("productos");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($codigo)
    {
        $productos= Productos::find($codigo);
        $productos->delete();
        
        return redirect("productos");
    }
}
