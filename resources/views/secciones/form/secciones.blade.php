{!!Form::open(['route'=>'secciones.store', 'method'=>'POST'])!!}
<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Registrar Seccion</h3>
    </div>
  	<div class="row">
        <div class="col-lg-6">
          {!!Form::label('seccion','Seccion:')!!}
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
            {!!Form::text('seccion',null,['class'=>'form-control', 'placeholder'=>'Ingresa la seccion'])!!}
            <input type="hidden" value="0" id="status" name="status">
          </div>
        </div><!-- /.col-lg-6 -->
   	</div><!-- /.row -->
    <br>
</div><!-- /.box -->
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
