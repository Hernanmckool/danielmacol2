@extends('layouts.admin')
    @section('content')
    @include('alerts.success')
    @include('alerts.act_usr')
    @include('usuario.alerts.validacion')
    @include('usuario.profile')
          @include('usuario/form/index')
    @endsection
    @section('scripts')
        {!!Html::script('asset/js/script2.js')!!}
    @endsection