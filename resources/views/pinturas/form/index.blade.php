<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Vista de Pinturas</h3><br><a href="{!!URL::to('/pinturas/create')!!}" class="btn btn-primary primary btn-xs" role="button">Crear pinturas</a>
        <div class="box-tools">
          <div class="input-group" style="width: 150px;" id="busqueda">
            <input type="text" id="q" name="q" name="table_search" class="form-control input-sm pull-right" placeholder="Buscar">
            <div class="input-group-btn">
              <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover" id="table">
          <thead>
            <th>Titulo</th>
            <th><div align="center">Pintura</div></th>
            <th><div align="center"><span class="glyphicon glyphicon-cog"></span><span class="glyphicon glyphicon-wrench"></span> Acciones</div></th>
            <th><div align="center">Estado</div></th>
          </thead>
            @foreach($pints as $pint)
            <tbody>
                <td>{{$pint->titulo}}</td>
                <td align="center" width="10%"><button value="{{$pint->path}}" OnClick='Modal_ver_paint(this);' class='btn btn-sm btn-primary btn-flat, ion-eye' data-toggle='modal' data-target='#myModal'></button></td>
                <td align="center" width="10%">
                {!!link_to_route('pinturas.edit', $title = '', $parameters = $pint->id, $attributes = ['class'=> 'btn btn-sm btn-warning btn-flat, glyphicon glyphicon-pencil']);!!}
                <button value="{{$pint->id}}" OnClick='Modal_elim_pint(this);' class='btn btn-sm btn-danger btn-flat, glyphicon glyphicon-remove' data-toggle='modal' data-target='#myModalElim'></button>
                <td width="10%"><label class='switch switch-green'><input type='checkbox' value='{{$pint->status}}' id='{{$pint->id}}' class='switch-input' onchange='estado_pin(this)' <?php if($pint->status==1) echo "checked"?> ><span class='switch-label' data-on='Activo' data-off='Inactivo'></span><span class='switch-handle'></span></label></td>
            </tbody>
            @endforeach
        </table>
        <input type="hidden" id="tipo" value="pintura">
        <input type="hidden" id="titu" value="{{$pint->titulo}}">
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div>