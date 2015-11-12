<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daniel Macol</title>

    <!-- Bootstrap Core CSS -->
    {!!Html::style('asset/css/bootstrap.min.css')!!}

    <!-- Custom CSS -->
    {!!Html::style('asset/css/stylish-portfolio_pinturas.css')!!}

    <!-- Custom Fonts -->
    <link href="" rel="stylesheet" type="text/css">
    {!!Html::style('asset/font-awesome/css/font-awesome.min.css')!!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<script language="javascript">
function cambiacolor_over(celda){ celda.style.backgroundColor="#ff0000" } 
function cambiacolor_out(celda){ celda.style.backgroundColor="#303030" }
</script>


</head>

<body>

<section class="content">
  <!-- HACER ALGO AQUI -->
    @yield('content')

</section><!-- /.content -->

<footer>
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1 text-center">
            <ul class="list-inline">
                <li>
                    <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                </li>
            </ul>
            <hr class="small">
            <p class="text-muted">Copyright &copy; Daniels Macol 2015 <br>Buenos Aires, Argentina</p>
        </div>
    </div>
</footer>
    <!-- jQuery -->
    {!!Html::script('asset/js/jquery.js')!!}

    <!-- Bootstrap Core JavaScript -->
    {!!Html::script('asset/js/bootstrap.min.js')!!}

    {!!Html::script('asset/js/script2.js')!!}

</body>

</html>
