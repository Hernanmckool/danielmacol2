@extends('layouts.admin')
    @section('content') 
    @include('alerts.request')
      {!!Form::open(['route'=>'categorias.store', 'method'=>'POST'])!!}
          @include('categorias/form/categorias')
          <div align="right">
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}    
          </div>  
      {!!Form::close()!!}
    @endsection
