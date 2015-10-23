{!!Form::open(['route'=>'articulos.store', 'method'=>'POST'])!!}
<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Registrar Articulos</h3>
    </div>
  	<div class="row">
        <div class="col-lg-6">
          {!!Form::label('titulo','Titulo del Articulo:')!!}
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
          {!!Form::text('titulo',null,['class'=>'form-control', 'placeholder'=>'Ingresa el titulo del Articulo'])!!}
        </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
        <label>Categorias:</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
            <select id="id_categoria" name="id_categoria" class="form-control select2" style="width: 100%;">
            <option value="" disabled="true" selected="true">Seleccione una Categoria</option>
              @foreach($cats as $cat)
              <option value="{{$cat->id}}">{{$cat->categoria}}</option>
              @endforeach
            </select>
        </div>
        </div><!-- /.col-lg-6 -->
   	</div><!-- /.row -->
    <br>
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Contenido del Articulo</h3>
        <!-- tools box -->
        <div class="pull-right box-tools">
          <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div><!-- /. tools -->
      </div><!-- /.box-header -->
      <div class="box-body pad">
          <textarea class="textarea" name="articulo" id="articulo" placeholder="Escribe aqui tu articulo" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
      </div>
    </div>
    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}    
</div><!-- /.box -->
{!!Form::close()!!}





