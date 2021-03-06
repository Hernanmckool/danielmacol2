<?php

namespace daniel\Http\Controllers;

use Illuminate\Http\Request;
use daniel\Http\Requests;
use daniel\Http\Requests\LoginRequest;
use daniel\Http\Controllers\Controller;
use Session;
use daniel\User;
use Redirect;
use Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
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

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/login');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        $email=$request['email'];
        $statu = User::buscar_status($email);
        if($statu == []){
            Session::flash('message-error','Este Usuario no se encuentra registrado en el Sistema');
            return Redirect::to('/login');
        }else{
        $status = $statu[0]->status;
            if($status == 1){
                if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){
                    return Redirect::to('admin');
                }else{
                    Session::flash('message-error','Correo Electronico y Contraseña no coinciden');
                    return Redirect::to('/login');
                }
            }elseif($status == 0){
                Session::flash('message-error','El Usuario fue deshabilitado, por favor consulte con el Administrador del Sistema');
                return Redirect::to('/login');
            }
        }

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
