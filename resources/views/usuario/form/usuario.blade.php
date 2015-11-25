{!!Form::open(['route'=>'usuario.store', 'method'=>'POST', 'files'=> true])!!}
<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Registrar Usuarios</h3>
    </div>
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
        <div class="col-lg-6">
          {!!Form::label('contraseña','Contraseña:')!!}
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          {!!Form::password('password', array('class' => 'form-control','placeholder' => 'Ingresa la Contraseña'))!!}
        </div>
        </div><!-- /.col-lg-6 -->
   	</div><!-- /.row -->
    <br>
  	<div class="row">
        <div class="col-lg-6">
          {!!Form::label('avatar','Avatar:')!!}
        <div class="input-group">
          <span class="input-group-addon"><i class="ion-images"></i></span>
          {!!Form::file('path')!!}
        </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
          {!!Form::label('repitecontraseña','Repite la Contraseña:')!!}
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          {!!Form::password('password2', array('class' => 'form-control','placeholder' => 'Repite la Contraseña'))!!}
        </div>
        </div><!-- /.col-lg-6 -->
      <input type="hidden" id="status" name="status" value="1">
   	</div><!-- /.row -->
    <br>
</div><!-- /.box -->
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
