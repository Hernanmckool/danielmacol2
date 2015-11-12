<?php

namespace daniel\Http\Controllers;

use Illuminate\Http\Request;
use daniel\Http\Requests;
use daniel\Http\Requests\PinturasRequest;
use daniel\Http\Requests\UpdatePinturasRequest;
use daniel\Http\Controllers\Controller;
use daniel\Pinturas;
use daniel\Categorias;
use Session;
use Redirect;

class PinturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pints = Pinturas::all();
        return view('pinturas.index',compact('pints'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Categorias::CategoriasPinturas();
        return view('pinturas.create',compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PinturasRequest $request)
    {
        Pinturas::create($request->all());
        Session::flash('message','Pintura Agregada exitosamente');
        return Redirect::to('/pinturas');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cats = Categorias::CategoriasPinturas();
        $pint = Pinturas::find($id);
        return view('pinturas.edit', compact('pint','cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePinturasRequest $request, $id)
    {
        $pint = Pinturas::find($id);

        if($request->path == null){
        $pint->fill([
            'titulo' => $request['titulo'],
            'resena' => $request['resena'],
            'id_categoria' => $request['id_categoria'],
        ]);
        $pint->save();
        }else{
        $pint = Pinturas::find($id);
        $pint->fill($request->all());
        $pint->save();
        }
        
        Session::flash('message','Pintura editada Correctamente');
        return Redirect::to('/pinturas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function eliminar($id)
    {
        
        $pint = Pinturas::find($id);
        $pint->delete();

        Session::flash('message','Pintura Eliminada Correctamente');
        return Redirect::to('/pinturas');
    /*

        return Response()->json([
            "mensaje"=>"Borrado"
            ]);
     */

    }

}
