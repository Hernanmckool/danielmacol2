<?php

namespace daniel\Http\Controllers;

use Illuminate\Http\Request;
use daniel\Http\Requests;
use daniel\Http\Requests\UserRequest;
use daniel\Http\Requests\UserUpdateRequest;
use daniel\Http\Requests\UpdatePassword;
use daniel\Http\Controllers\Controller;
use daniel\User;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class UsuarioController extends Controller
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
        $users = User::paginate(6);
        return view('usuario.index',compact('users'));
    }

    public function listing()
    {
        $usr = User::all();
        return Response()->json(
            $usr->toArray()
            );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $pass1= $request->password;
        $pass2= $request->password2;
        if($pass1 == $pass2){
            User::create($request->all());
            Session::flash('message','Usuario Creado Exitosamente');
            return Redirect::to('/usuario');
        }else {
            Session::flash('message-error','La contrasena no coincide');
            return Redirect::to('/usuario/create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(UpdatePassword $request, $id)
    {
        $pass1= $request->password;
        return $pass1;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('usuario.edit',['user'=>$user]);
    /*
        $users = User::find($id);
        return Response()->json($users);
     */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
            $user = User::find($id);
            $user->fill($request->all());
            $user->save();
            
            Session::flash('message','Usuario Editado Correctamente');
            return Redirect::to('/usuario');
    /*
        return Response()->json([
            "mensaje"=>"Usuario Actualizado"
            ]);
     */

    }

     public function editar($id, $dato)
    {
        $sec = User::find($id);
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

    public function cambiar(UpdatePassword $request, $id)
    {
        $pass1= $request->password;
        $pass2= $request->password2;
        $url= "/usuario/{$id}/edit";

        if($pass1 == $pass2){
            $user = User::find($id);
            $user->fill($request->all());
            $user->save();
            Session::flash('message','Contrasena Editada Exitosamente');
            return Redirect::to('/usuario');
        }else {
            Session::flash('message-error','La contrasena no coincide');
            return Redirect::to($url);
        }
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = User::find($id);
        $user->delete();

        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
    /*

        return Response()->json([
            "mensaje"=>"Borrado"
            ]);
     */

    }
    public function eliminar($id)
    {
        
        $user = User::find($id);
        $user->delete();

        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
    /*

        return Response()->json([
            "mensaje"=>"Borrado"
            ]);
     */

    }

}
