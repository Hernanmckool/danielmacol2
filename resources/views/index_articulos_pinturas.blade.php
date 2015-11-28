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
    {!!Html::style('asset/css/stylish-portfolio_pinturas.css')!!}
    {!!Html::style('asset/css/magnific-popup.css')!!}
    {!!Html::style('asset/font-awesome/css/font-awesome.min.css')!!}

<script language="javascript">
function cambiacolor_over(celda){ celda.style.backgroundColor="#ff0000" } 
function cambiacolor_out(celda){ celda.style.backgroundColor="#303030" }
</script>


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
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div>&nbsp;</div>
        </div>
        <div class="col-lg-12">
            <div>&nbsp;</div>
        </div>
        <div class="col-lg-12">
            <div>&nbsp;</div>
    </div><!-- /.col-lg-12 -->
    <div class="row">
        <div class="col-md-2">
            <div align="center">
                <div>
                <a href="/pintura">
                    {!!Html::image('asset/img/bg2.jpg', 'Logo Daniel', array('width' => 110 , 'height' => 140))!!}
                </a>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div>
                <div class="tabla">
                    <h3>@foreach($pin_cat as $cat)
                        <p> <strong>{{$cat->categoria}}</strong> </p>
                        <p class="descrip"> <strong>{{$cat->descripcion}}</strong> </p>
                    @endforeach
                    </h3>
                </div>
                <table border="0"  class="table table-hover">
                    @foreach($pins as $pint)
                        <tr bgcolor="#303030" onmouseover="cambiacolor_over(this)" onmouseout="cambiacolor_out(this)">
                           <td class="titulo">
                           <?php 
                           $texto = "Estoy viendo ".$pint->titulo;
                           $url = "http://www.danielmacol.com/pinturas/front/individual.php?art=".$pint->id;
                           $via = "danielmacol";
                           $twitter_in = "<a target='_blank' href='https://twitter.com/intent/tweet?text=".$texto."&url=".$url."&via=".$via."'>";
                           $twitter_out = "</a>";
                           $facebook_in = "<a target='_blank' href='https://www.facebook.com/sharer/sharer.php?u=".$url."'>";

                           $facebook_out = "</a>";
                           ?>
                            <a  style='text-decoration:none;outline: 0;' class="image-popup-vertical-fit" id="{{$pint->path}}" href="{{asset('asset/pinturas')}}/{{$pint->path}}" 
                            title="
                            <div class='img_piso'>{{$pint->titulo}}</div>
                            <div class='img_piso'>{{$pint->resena}}</div>
                            <div align='right'>
                            {{$facebook_in}}{{Html::image('asset/img/facebook.png', 'User Image')}}{{$facebook_out}}
                            {{$twitter_in}}{{Html::image('asset/img/twitter.png', 'User Image')}}{{$twitter_out}}
                            </div>

                             "><span title=" ">
                              <p class="descri">
                                <b>{{$pint->titulo}}</b>
                                <br>&nbsp;&nbsp;&nbsp;
                                {{$pint->resena}}
                              </p></span>
                            </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
        <div align="center">{!!$pins->render()!!}</div>
</div>
        <div align="center">
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
</div>

    <!-- jQuery -->
    {!!Html::script('asset/js/jquery.js')!!}
    <!-- Bootstrap Core JavaScript -->
    {!!Html::script('asset/js/bootstrap.min.js')!!}
    {!!Html::script('asset/js/script2.js')!!}
    {!!Html::script('asset/js/script.js')!!}
    {!!Html::script('asset/js/image.js')!!}    
    {!!Html::script('asset/js/jquery.magnific-popup.js')!!}
</body>

</html>
 