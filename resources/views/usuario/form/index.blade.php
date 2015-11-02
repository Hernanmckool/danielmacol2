<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Vista de Usuarios</h3><br><a href="{!!URL::to('/usuario/create')!!}" class="btn btn-primary primary btn-xs" role="button">Crear usuarios</a>
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
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo Electronico</th>
            <th><div align="center"><span class="glyphicon glyphicon-cog"></span><span class="glyphicon glyphicon-wrench"></span> Acciones</div></th>
          </thead>
            @foreach($users as $user)
            <tbody>
                <td>{{$user->nombre}}</td>
                <td>{{$user->apellido}}</td>
                <td>{{$user->email}}</td>
                <td>
            {!!link_to_route('usuario.edit', $title = '', $parameters = $user->id, $attributes = ['class'=> 'btn btn-sm btn-warning btn-flat, glyphicon glyphicon-pencil']);!!}
            <button value="{{$user->id}}" OnClick='Modal_elim_usr(this);' class='btn btn-sm btn-danger btn-flat, glyphicon glyphicon-remove' data-toggle='modal' data-target='#myModalElim'></button>
            </tbody>
            @endforeach
        </table>
        <input type="hidden" id="tipo" value="usuario">
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div>