<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daniel Macol</title>
    <link rel="icon" href="asset/img/logodm.png">
    
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
    <header id="top">
    <br>
    <div align="center">
    <a href="/" title="Daniel Macol">
        {!!Html::image('asset/img/bg.jpg', 'Logo danielmacol')!!} <br>
    </a>
        {!!Html::image('asset/img/star.png', 'Star')!!}
	</div>
    </header> 
    <!-- About -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    @foreach($cats as $cat)
                        <a class="textos" href="{!!URL::to('/index_articulos_poemas',[$cat->id])!!}">{{$cat->categoria}}</a> <br>
                    @endforeach
        {!!Html::image('asset/img/star.png', 'star')!!}
                </div>
            </div>
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
        </div>

    <!-- jQuery -->
    {!!Html::script('asset/js/jquery.js')!!}

    <!-- Bootstrap Core JavaScript -->
    {!!Html::script('asset/js/bootstrap.min.js')!!}

    {!!Html::script('asset/js/script.js')!!}

</body>

</html>
