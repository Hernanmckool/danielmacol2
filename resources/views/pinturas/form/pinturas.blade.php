{!!Form::open(['route'=>'pinturas.store', 'method'=>'POST', 'files'=> true])!!}
<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Registrar Pinturas</h3>
    </div>
    <div class="row">
        <div class="col-lg-6">
          {!!Form::label('titulo','Titulo:')!!}
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
          {!!Form::text('titulo',null,['class'=>'form-control', 'placeholder'=>'Ingresa el titulo de la pintura'])!!}
        </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
          {!!Form::label('resena','Reseña:')!!}
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
          {!!Form::text('resena',null,['class'=>'form-control', 'placeholder'=>'Ingresa breve reseña de la pintura'])!!}
        </div>
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    <br>
    <div class="row">
        <div class="col-lg-6">
          {!!Form::label('pintura','Pintura:')!!}
            <div class="input-group">
              <span class="input-group-addon"><i class="ion-images"></i></span>
              {!!Form::file('path')!!}
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
      <input type="hidden" id="status" name="status" value="1">
    </div><!-- /.row -->
    <br>
</div><!-- /.box -->
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
