<!DOCTYPE html>
<html class="bg-black">
<head>
    <meta charset="UTF-8">
    <title>
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    {!!Html::style('asset/css/bootstrap.min.css')!!}
    {!!Html::style('asset/css/AdminLTE.css')!!}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]--> 
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
</body>
</html>
