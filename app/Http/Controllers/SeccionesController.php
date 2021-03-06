<?php

namespace daniel\Http\Controllers;

use Illuminate\Http\Request;
use daniel\Http\Requests;
use daniel\Http\Requests\SeccionRequest;
use daniel\Http\Controllers\Controller;
use daniel\Secciones;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class SeccionesController extends Controller
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
        $secci = Secciones::paginate(6);
        return view('secciones.index', compact('secci'));
    }

    public function listing(){
       $secc = Secciones::paginate(6);
       return response()->json(
            $secc
        ); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('secciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeccionRequest $request)
    {
        Secciones::create($request->all());
        Session::flash('message','Seccion Creada Exitosamente');
        return Redirect::to('/secciones');
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

    public function combo(){
        $sec = Secciones::all();
        return Response()->json($sec);
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $secc = Secciones::find($id);
      return Response()->json($secc);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SeccionRequest $request, $id)
    {
       $sec = Secciones::find($id);
       $sec->fill($request->all());
       $sec->save();

       return Response()->json([
        "mensaje"=>"Actualizado"
        ]);
    }

    public function editar($id, $dato)
    {
        $sec = Secciones::find($id);
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
        $secc = Secciones::find($id);
        $secc->delete();

        return Response()->json([
            "mensaje" => "borrado"
        ]);
    }
}
