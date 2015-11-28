<!doctype html>

<html lang="en" class="no-js">

<head>

    <!-- meta data -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">

    <!-- title and favicon -->

    <title>Daniel Macol</title>
    <link rel="icon" href="asset/img/logodm.png">
    

    <!--necessary stylesheets -->
    {!!Html::style('asset/css/bootstrap.min.css')!!}
    {!!Html::style('asset/css/style_index.css')!!}
</head>


<body>
    
    <!-- Preloader -->
    
    <div id="preloader">
        <div class="loader">
            <span><img alt="" src="asset/img/logodm.png"></span>
            <span><img alt="" src="asset/img/logodm.png"></span>
            <span><img alt="" src="asset/img/logodm.png"></span>
            <span><img alt="" src="asset/img/logodm.png"></span>
        </div>
    </div>
    
    <!-- home-page -->
    
    <div class="home-page">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 menu">
            <div class="portfolio-btn">
                <img alt="" src="asset/img/fondo_poemas.jpg" style="width:100%; height:100%;">
                <div class="heading">
                <a href="/poema">
                    <img alt="" src="asset/img/bg.jpg">
                </a>
                </div>
            </div>
        </div>
         
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 menu">
            <div class="profile-btn">
                <img alt="" src="asset/img/fondo_pinturas.jpg" style="width:100%; height:100%;">
                <div class="heading">
                <a href="/pintura">
                    <img alt="" src="asset/img/bg2.jpg" style="width:100%; height:100%;">
                </a>
                </div>
            </div>
        </div>
    </div>
    {!!Html::script('asset/js/jQuery-2.1.4.min.js')!!}
    {!!Html::script('asset/js/bootstrap.min.js')!!}
    {!!Html::script('asset/js/script_index.js')!!}

</body>
</html>