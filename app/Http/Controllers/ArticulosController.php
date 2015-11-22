<?php

namespace daniel\Http\Controllers;

use Illuminate\Http\Request;
use daniel\Http\Requests;
use daniel\Http\Requests\ArticuloRequest;
use daniel\Http\Controllers\Controller;
use daniel\Articulos;
use daniel\Categorias;
use Redirect;
use Session;
use Illuminate\Routing\Route;

class ArticulosController extends Controller
{
 
    public function __construct(){
        $this->middleware('auth', ['only'=>['create','index','store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('articulos.index');
    }

    public function Listing()
    {
        $arts = Articulos::articulos();
        return Response()->json($arts);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Categorias::CategoriasPoemas();
        return view('articulos.create',compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticuloRequest $request)
    {
        $arts = Articulos::create($request->all());
        Session::flash('message','Articulo creado exitosamente');
        return Redirect::to('/articulos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artic = Articulos::articulos_ids($id);
        return response()->json($artic);        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artic = Articulos::articulos_id_edit($id);
        return response()->json($artic);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticuloRequest $request, $id)
    {
        $artc = Articulos::find($id);
        $artc->fill($request->all());
        $artc->save();
        
        return Response()->json([
            "mensaje"=>"Actualizado"
            ]);
    }

    public function editar($id, $dato)
    {
        $sec = Articulos::find($id);
        if($dato==1){
            $dato=0;
            $sec->fill(['status' => $dato,]);
            $sec->save();
        }else{
            $dato=1;
            $sec->fill(['status' => $dato,]);
            $sec->save();
        }
       return Response()->json([
        "mensaje"=>"Checkbox Actualizado"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $art = Articulos::find($id);
        $art->delete();

        return Response()->json([
            "mensaje"=>"borrado"
            ]);
    }
}
