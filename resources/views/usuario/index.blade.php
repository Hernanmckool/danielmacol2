@extends('layouts.admin')
    @section('content')
    @include('alerts.success')
    @include('alerts.elim_usr')
    @include('alerts.act_usr')
    @include('alerts.validacion')
    @include('usuario.profile')
    @include('modal.modal_elim')
          @include('usuario/form/index')
    @endsection
    @section('scripts')
        {!!Html::script('asset/js/script2.js')!!}
        {!!Html::script('asset/js/buscar.js')!!}
        {!!Html::script('asset/js/jquery.uitablefilter.js')!!}
    @endsection