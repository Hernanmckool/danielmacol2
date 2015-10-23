@extends('layouts.admin')

@section('content')
@include('alerts.request');

	{!!Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT'])!!}
			@include('usuario/forms/usr');
	<table align="center" class="">
		<tr>
		<td>{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}</td>
		<td>&nbsp;&nbsp;&nbsp;</td>
	{!!Form::close()!!}
	{!!Form::open(['route'=>['usuario.destroy',$user->id],'method'=>'DELETE'])!!}
		<td>{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}</td>
	{!!Form::close()!!}
		</tr>
	</table>
	
@stop