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
    @section('scripts')
        {!!Html::script('plugins/select2/select2.full.min.js')!!}
        {!!Html::script('plugins/input-mask/jquery.inputmask.js')!!}
        {!!Html::script('plugins/input-mask/jquery.inputmask.date.extensions.js')!!}
        {!!Html::script('plugins/input-mask/jquery.inputmask.extensions.js')!!}
        {!!Html::script('plugins/fastclick/fastclick.min.js')!!}
        {!!Html::script('js/script.js')!!}
        {!!Html::script('js/script2.js')!!}
    @endsection