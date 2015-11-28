<?php

namespace daniel\Http\Controllers;

use Illuminate\Http\Request;
use daniel\Http\Requests;
use daniel\Http\Controllers\Controller;
use daniel\Categorias;
use daniel\Articulos;
use daniel\Secciones;
use daniel\User;
use daniel\Pinturas;

class FrontPoemasController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['only'=>'admin']);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Categorias::CategoriasPoemas();
        return view('index_poemas',compact('cats'));
    }

    public function inicio()
    {
        return view('index');
    }


    public function admin()
    { 
        $pint_count = Pinturas::count_pinturas();
        $sec_count = Secciones::count_secciones();
        $cat_count = Categorias::count_categorias();
        $art_count = Articulos::count_articulos();
        return view('admin.index',compact('art_count','pint_count','sec_count','cat_count'));
    }

    public function article($id) 
    {   
        $art_cat = Articulos::articulos_cat($id);
        $arts = Articulos::articulos_id($id);
        return view('index_articulos_poemas', compact('arts','art_cat'));
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
