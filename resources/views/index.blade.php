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
    {!!Html::style('asset/css/stylish-portfolio.css')!!}

    <!-- Custom Fonts -->
    <link href="" rel="stylesheet" type="text/css">
    {!!Html::style('asset/font-awesome/css/font-awesome.min.css')!!}
    {!!Html::style('http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic')!!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >Start Bootstrap</a>
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click(); >About</a>
            </li>
            <li>
                <a href="#services" onclick = $("#menu-close").click(); >Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick = $("#menu-close").click(); >Portfolio</a>
            </li>
            <li>
                <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top">
    <br>
    <div align="center">
        {!!Html::image('asset/img/bg.jpg', 'User Image')!!} <br>
        {!!Html::image('asset/img/star.png', 'User Image')!!}
	</div>
    </header> 
    <!-- About -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    @foreach($cats as $cat)
                        <p>{{$cat->categoria}}</p>
                    @endforeach
        {!!Html::image('asset/img/star.png', 'User Image')!!}
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
