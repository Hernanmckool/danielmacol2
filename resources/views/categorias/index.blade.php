@extends('layouts.admin')
    @section('content')
    @include('alerts.success')
    @include('alerts.request')
          @include('categorias/form/index')
    @endsection
