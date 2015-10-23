<?php

namespace daniel\Http\Controllers;

use Illuminate\Http\Request;
use daniel\Http\Requests;
use daniel\Http\Controllers\Controller;
use daniel\Categorias;
use daniel\Articulos;

class FrontController extends Controller
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
        $cats = Categorias::all();
        return view('index',compact('cats'));
    }

    public function admin()
    {
        return view('layouts.admin');
    }

    public function article($id) 
    {   
        $art_cat = Articulos::articulos_cat($id);
        $arts = Articulos::articulos_id($id);
        return view('index_articulos', compact('arts','art_cat'));
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
