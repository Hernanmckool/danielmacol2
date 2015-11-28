<!DOCTYPE html>
<html class="bg-black">
<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <title>Daniel Macol</title>
    <link rel="icon" href="asset/img/logodm.png">

    {!!Html::style('asset/css/bootstrap.min.css')!!}
    {!!Html::style('asset/css/AdminLTE.css')!!}

</head>
<body class="bg-black">
@include('alerts.errors')
@include('alerts.request')
{!!Form::open(['route'=>'login.store', 'method'=>'POST'])!!}
<div class="form-box" id="login-box">
    <div class="header">Inicio de Sesion</div>
        <div class="body bg-gray">
            <div class="form-group">
          {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa el correo electronico'])!!}
            </div>
            <div class="form-group">
          {!!Form::password('password', array('class' => 'form-control','placeholder' => 'Ingresa la Contraseña'))!!}
            </div>
            <div class="form-group">
                <input type="checkbox" name="remember_me" id="remember_me"/>
                <label for="remember_me">Recordar</label>
            </div>
        </div>
        <div class="footer">
            {!!Form::submit('Entrar',['class'=>'btn btn-info btn-block'])!!}<p><a href="">Olvido su contrasena</a></p>
        </div>
    </div>
</div>
{!!Form::close()!!}
{!!Html::script('asset/js/jquery.js')!!}
</body>
</html>
