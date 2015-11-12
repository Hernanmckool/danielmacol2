@extends('layouts.admin')

@section('content')
@include('alerts.request')
@include('alerts.success')
@include('alerts.act_pin')
@include('alerts.errors')
	@include('pinturas/form/editar')	
@stop