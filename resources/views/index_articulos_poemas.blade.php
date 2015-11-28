<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daniel Macol</title>
    <link rel="icon" href="../asset/img/logodm.png">

    {!!Html::style('asset/css/bootstrap.min.css')!!}
    {!!Html::style('asset/css/stylish-portfolio_poemas.css')!!}
    {!!Html::style('asset/font-awesome/css/font-awesome.min.css')!!}

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >Daniel Macol</a>
            </li>
            <li>
                <a href="/" onclick = $("#menu-close").click(); >Inicio</a>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click(); >Biografia</a>
            </li>
            <li>
                <a href="#services" onclick = $("#menu-close").click(); >Portafolio</a>
            </li>
            <li>
                <a href="#contact" onclick = $("#menu-close").click(); >Contacto</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <!-- About -->
<br>

        <div class="row">
            <div class="col-xs-12 col-sm-2 col-md-3 col-lg-1" align="center"><br>
                <a href="{{URL::to('/poema')}}">
                    {!!Html::image('asset/img/bg.jpg','alt', array( 'width' => 200, 'height' => 200 ))!!}
                </a>
            </div>
            <div class="col-xs-1 col-sm-2 col-md-3 col-lg-1">
              &nbsp;
            </div>
            <!-- /.col-md-4 -->
            <div style="margin-left: 15px;" class="col-xs-12 col-sm-5 col-md-3 col-lg-4">
                <h3>@foreach($art_cat as $cat)
                    <p> <strong>{{$cat->categoria}}</strong> </p>
                @endforeach
                </h4>
                <?php $num=1;?>
                @foreach($arts as $art)
                    <a class="textos" href="#" onclick="Mostrar({{$art->id}})">{{$num++}}. {{$art->titulo}}</a><br>
                @endforeach
            </div>
            <!-- /.col-md-4 -->
            <div style="margin-left: 15px;" class="col-xs-11 col-sm-11 col-md-3 col-lg-5">
            <table id="table"></table>
            </div>
            <!-- /.col-md-4 -->
        </div>
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
                    <p class="text-muted">Copyright &copy; Daniel Macol 2015 <br>Buenos Aires, Argentina</p>
                </div>
            </div>
        </footer>        </div>

    <!-- jQuery -->
    {!!Html::script('asset/js/jquery.js')!!}

    <!-- Bootstrap Core JavaScript -->
    {!!Html::script('asset/js/bootstrap.min.js')!!}

    {!!Html::script('asset/js/script.js')!!}
    {!!Html::script('asset/js/script2.js')!!}

</body>

</html>
