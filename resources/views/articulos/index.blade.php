@extends('layouts.admin')
    @section('content')
    @include('alerts.success')
    @include('alerts.act_art')
    @include('alerts.request')
    @include('alerts.validacion')
    @include('articulos.edit')
    @include('modal.modal_elim')
          @include('articulos/form/index')
    @endsection
    @section('scripts')
    	{!!Html::script('asset/js/script2.js')!!}
    @endsection
