@extends('layouts.admin')

@section('content')
@include('alerts.request')
@include('alerts.act_usr')
@include('alerts.errors')
	@include('usuario/form/editar')	
@stop