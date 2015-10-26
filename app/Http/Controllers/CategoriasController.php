<?php

namespace daniel\Http\Controllers;

use Illuminate\Http\Request;
use daniel\Http\Requests;
use daniel\Http\Requests\CategoriaRequest;
use daniel\Http\Controllers\Controller;
use daniel\Secciones;
use daniel\Categorias;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class CategoriasController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categorias.index');
    }

    public function listing()
    {
        $cate = Categorias::categorias();
        return Response()->json(
                $cate
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $secc = Secciones::all();
        return view('categorias.create',compact('secc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriaRequest $request)
    {
        Categorias::create($request->all());
        Session::flash('message','Categoria Creada Exitosamente');
        return Redirect::to('/categorias');
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

    public function combo()
    {
        $cat = Categorias::all();
        return Response()->json($cat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $cate = Categorias::categorias_id($id);
      return Response()->json($cate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriaRequest $request, $id)
    {
        $categ = Categorias::find($id);
        $categ->fill($request->all());
        $categ->save();

        return Response()->json([
            "mensaje"=>"Actualizado"
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
        $cate = Categorias::find($id);
        $cate->delete();

        return Response()->json([
            "mensaje"=>"`borrado"
            ]);
    }
}
