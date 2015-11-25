<?php
if($user->path==''){
    $paths= 'usuario.png';
  }else{
  $paths = $user->path;
  }
?>

<div class="row">
  <div class="col-md-12">
    <!-- Custom Tabs -->
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab">Editar</a></li>
        <li><a href="#tab_2" data-toggle="tab">Cambiar Contraseña</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
          {!!Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT', 'files'=> true])!!}
          <div class="box box-info">
              <div class="box-header with-border">
              </div>
              <div class="row">
                <div align="center">{!!Html::image('asset/avartars/'.$paths, 'User Image', array('class' => 'img-circle', 'width' => 80 , 'height' => 80))!!}
                </br>
                {!!Form::file('path')!!}
                </div>
              </div><!-- /.row -->
              <div class="row">
                  <div class="col-lg-6">
                    {!!Form::label('nombre','Nombre:')!!}
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                    {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre'])!!}
                  </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-lg-6">
                    {!!Form::label('apellido','Apellido:')!!}
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                    {!!Form::text('apellido',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Apellido'])!!}
                  </div>
                  </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
              <br>
              <div class="row">
                  <div class="col-lg-6">
                    {!!Form::label('email','Correo Electronico:')!!}
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                      {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa el correo electronico'])!!}
                    </div>
                  </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
          </div><!-- /.box -->
          {!!Form::submit('Actualizar',['class'=>'btn btn-warning'])!!}
          {!!Form::close()!!}
        </div><!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">
        <div class="tab-pane active" id="tab_1">

        <form action="cambiar" name="form" method="GET">
          <div class="box box-info">
              <div class="box-header with-border">
              </div>
              <div class="row">
                  <div class="col-lg-6">
                    {!!Form::label('password','Contraseña:')!!}
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    {!!Form::password('password', array('class' => 'form-control','placeholder' => 'Ingresa la Contraseña'))!!}
                  </div>
                  </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
              <br>
              <div class="row">
                  <div class="col-lg-6">
                    {!!Form::label('repitecontraseña','Repite la Contraseña:')!!}
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                      {!!Form::password('password2', array('class' => 'form-control','placeholder' => 'Repite la Contraseña'))!!}
                    </div>
                  </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
          </div><!-- /.box -->
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          {!!Form::submit('Actualizar',['class'=>'btn btn-warning'])!!}
        </form>
        </div><!-- /.tab-pane -->        </div><!-- /.tab-pane -->
      </div><!-- /.tab-content -->
    </div><!-- nav-tabs-custom -->
  </div><!-- /.col -->
</div>