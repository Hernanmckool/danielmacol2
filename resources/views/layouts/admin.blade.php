<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administracion DanielMacol</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    {!!Html::style('asset/css/bootstrap.min.css')!!}
    {!!Html::style('asset/css/bootstrap-theme.min.css')!!}
    {!!Html::style('asset/css/font-awesome.min.css')!!}
    {!!Html::style('asset/css/AdminLTE.min.css')!!}
    {!!Html::style('asset/css/_all-skins.min.css')!!}
    {!!Html::style('asset/css/ionicons.min.css')!!}
    {!!Html::style('asset/css/check.css')!!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
          <!-- Conteniene el la cabecera "HEADER" -->
        @include('layouts.admin.header')      <!-- Incluimos el header del proyecto -->
          <!-- Conteniene el menu lateral -->
        @include('layouts.admin.menu_lateral')      <!-- Incluimos el menu lateral -->
          <!-- Contenido Wrapper. Contiene la informacion de la pagina -->
        <div class="content-wrapper">
            <!-- Cabecera de Contenido (Page header) -->
          @include('layouts.admin.ruta_navegacion')      <!-- Incluimos el ruta de navegacion -->
            <!-- Seccion Principal de CONTENIDO -->
            <section class="content">


              <!-- HACER ALGO AQUI -->
                @yield('content')

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
          <!-- Fotter -->
        @include('layouts.admin.fotter')      <!-- Incluimos el fotter del documento -->
          <!-- Control Sidebar -->
        @include('layouts.admin.menu_sidebar')      <!-- Incluimos el menu del sidebar -->
    </div><!-- ./wrapper -->

    {!!Html::script('asset/js/jQuery-2.1.4.min.js')!!}
    {!!Html::script('asset/js/bootstrap.min.js')!!}
    {!!Html::script('asset/js/app.min.js')!!}
    @section('scripts')
    @show
  </body>
</html>
