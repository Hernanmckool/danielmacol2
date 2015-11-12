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
    </div>
    <!-- /.col-lg-12 -->
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div align="center">
                <div>
                <a href="/">
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
                        <p class="descri"> <strong>{{$cat->categoria}}</strong> </p>
                    @endforeach
                    </h3>
                </div>
                <table border="0" class='tabla'>
                    @foreach($pins as $pint)
                        <tr bgcolor="#303030" onmouseover="cambiacolor_over(this)" onmouseout="cambiacolor_out(this)">
                           <td class="titulo">
                           <?php $path = $pint->path;?>
                            <a class="textos" href="#" onclick="Modal_ver_paint_prin(this)" id="{{$path}}" data-toggle='modal' data-target='#myModal'>
                              <p class="descri">
                                <b>{{$pint->titulo}}</b>
                                <br>&nbsp;&nbsp;&nbsp;
                                {{$pint->titulo}}
                              </p>
                            </a>
                            </td> 
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>