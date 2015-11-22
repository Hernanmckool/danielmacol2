<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Registrar Categoria</h3>
    </div>
  	<div class="row">
        <div class="col-lg-6">
          {!!Form::label('categoria','Categoria:')!!}
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
          {!!Form::text('categoria',null,['class'=>'form-control', 'placeholder'=>'Ingresa la Categoria'])!!}
        <input type="hidden" value="0" id="status" name="status">
        </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
        <label>Secciones:</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
            <select id="id_seccion" name="id_seccion" class="form-control select2" style="width: 100%;">
            <option value="" disabled="true" selected="true">Seleccione una Seccion</option>
              @foreach($secc as $sec)
              <option value="{{$sec->id}}">{{$sec->seccion}}</option>
              @endforeach
            </select>
        </div>
        </div><!-- /.col-lg-6 -->
   	</div><!-- /.row -->
    <br>
    <br>
</div><!-- /.box -->


