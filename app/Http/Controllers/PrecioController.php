<?php

namespace App\Http\Controllers;

use App\Models\Precio;
use Illuminate\Http\Request;

class PrecioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo ('estamos dentro de la pagina de index');
        
        return Precio::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo ('estamos dentro de la pagina de create');
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
        $precios = new Precio();
        $precios->precio = $request->input('precio');
        $precios->save();
        echo ('se ha guardado correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\precio  $precio
     * @return \Illuminate\Http\Response
     */
    public function show(precio $precio)
    {
        echo ('estamos dentro de la pagina de show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\precio  $precio
     * @return \Illuminate\Http\Response
     */
    public function edit($precio)
    {
        echo ('estamos dentro de la pagina de edit');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\precio  $precio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $precio)
    {
        //echo ('estamos dentro de la pagina de update');
        $precios = Precio::find($precio);
        $precios->precio = $request->input('precio');
        $precios->save();
        echo ('se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\precio  $precio
     * @return \Illuminate\Http\Response
     */
    public function destroy( $precio)
    {
        //echo ('estamos dentro de la pagina de destroy');
        $precios = Precio::find($precio);
        $precios->delete();
        echo ('se ha eliminado correctamente');
    }
}
