<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    
        return Producto::get();
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //echo ('estamos dentro de la pagina de store');
        $productos = new Producto();
        $productos->nombre = $request->input('nombre');
        $productos->estado = $request->input('estado');
        $productos->descripcion = $request->input('descripcion');
        $productos->cantidad = $request->input('cantidad');
        $productos->imagen = $request->input('imagen');
        $productos->idtipo = $request->input('idtipo');
        $productos->idprecio = $request->input('idprecio');
        $productos->save();
        echo ('se ha guardado correctamente');
        
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $producto)
    {
        //echo ('estamos dentro de la pagina de update');
        $productos = Producto::find($producto);
        $productos->nombre = $request->input('nombre');
        $productos->estado = $request->input('estado');
        $productos->descripcion = $request->input('descripcion');
        $productos->cantidad = $request->input('cantidad');
        $productos->imagen = $request->input('imagen');
        $productos->idtipo = $request->input('idtipo');
        $productos->idprecio = $request->input('idprecio');
        $productos->save();
        echo ('se ha actualizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy( $producto)
    {
        //echo ('estamos dentro de la pagina de destroy');
        $productos = Producto::find($producto);
        $productos->delete();
    }
}
