<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Registrar Usuarios</h3>
    </div>
  	<div class="row">
        <div class="col-lg-6">
          {!!Form::label('nombre','Nombres:')!!}
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
          {!!Form::text('nombres',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre'])!!}
        </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
        <label>Apellidos:</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
          {!!Form::text('apellidos',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Apellido'])!!}
        </div>
        </div><!-- /.col-lg-6 -->
   	</div><!-- /.row -->
    <br>
  	<div class="row">
        <div class="col-lg-6">
        <label>Nro. Documento</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
          {!!Form::text('documento',null,['class'=>'form-control', 'placeholder'=>'Ingrese su numero de documento (Cedula, DNI, PAS)'])!!}
        </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
        <label>Telefono</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-phone"></i></span>
          {!!Form::text('telefono',null,['class'=>'form-control','data-inputmask'=>'"mask": "(999) 999-9999"', 'data-mask'])!!}
        </div>
        </div><!-- /.col-lg-6 -->
   	</div><!-- /.row -->
    <br>
  	<div class="row">
        <div class="col-lg-6">
          <label>Pais</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <select id="id_pais" name="id_pais" class="form-control" style="width: 100%;">
            <option value="" disabled="true" selected="true">Seleccione el pais</option>
              @foreach($paises as $pais)
              <option value="{{$pais->id}}">{{$pais->nombre}}</option>
              @endforeach
            </select>
          </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
        <label>Estado</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <select name="id_estado" class="form-control" id="id_estado" style="width: 100%;">
            <option value="" disabled="true" selected="true">Seleccione el estado</option>
            </select>
          </div>
        </div><!-- /.col-lg-6 -->
   	</div><!-- /.row -->
    <br>
  	<div class="row">
        <div class="col-lg-6">
        <label>Direccion</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
          <textarea class="form-control" name="direccion" rows="4" placeholder="Ingresa tu direccion"></textarea>
        </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
        <label>Cod. Postal</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
          <input type="text" class="form-control" name="postal" placeholder="Ingresa codigo postal">
        </div>
        <label>Profesion u Oficio</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <select id="id_profesion" name="id_profesion" class="form-control select2" style="width: 100%;">
            <option value="" disabled="true" selected="true">Seleccione la profesion</option>
              @foreach($profe as $prof)
              <option value="{{$prof->id}}">{{$prof->nombre}}</option>
              @endforeach
            </select>
        </div>
        </div><!-- /.col-lg-6 -->
   	</div><!-- /.row -->
    <br>
    <div class="row">
        <div class="col-lg-6">
        <label>Cargo</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <select id="id_cargo" name="id_cargo" class="form-control select2" style="width: 100%;">
            <option value="" disabled="true" selected="true">Seleccione el cargo</option>
              @foreach($cargo as $cargos)
              <option value="{{$cargos->id}}">{{$cargos->cargos}}</option>
              @endforeach
            </select>
          </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
        <label>Departamento</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <select id="id_departamento" name="id_departamento" class="form-control select2" style="width: 100%;">
            <option value="" disabled="true" selected="true">Seleccione el departamento</option>
              @foreach($depts as $dept)
              <option value="{{$dept->id}}">{{$dept->departamento}}</option>
              @endforeach
            </select>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->

    <br>
  	<div class="row">
        <div class="col-lg-6">
        <label>Email</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
          <input type="email" class="form-control" name="email" placeholder="Ingtrese email">
        </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
        <label>Tipo de Operador</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="text" class="form-control" name="id_operador" placeholder="Ingresa codigo postal">
          </div>
        </div><!-- /.col-lg-6 -->
   	</div><!-- /.row -->
    <br>
  	<div class="row">
        <div class="col-lg-6">
        <label>Usuario</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input type="text" class="form-control" name="usuario" placeholder="Ingrese el Usuario">
        </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
        <label>Password</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password"  name="password" class="form-control" placeholder="Ingrse el password">
        </div>
        </div><!-- /.col-lg-6 -->
   	</div><!-- /.row -->
    <br>
  	<div class="row">
        <div class="col-lg-6">
<!--                    <label> </label>
<button type="button" class="btn btn-block btn-primary">Registrar</button>
-->
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
        <label>Repite el Password</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" name="password2" class="form-control" placeholder="Ingrse el password">
        </div>
        </div><!-- /.col-lg-6 -->
   	</div><!-- /.row -->
</div><!-- /.box -->


<!--
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            {!!Form::select('id_departamento', $depts, null, array('class'=>'form-control select2','style'=>'width: 100%;'))!!}
-->