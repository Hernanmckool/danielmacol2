@extends('layouts.admin')
    @section('content')
    @include('alerts.success')
    @include('alerts.request')
          @include('articulos/form/index')
    @endsection
