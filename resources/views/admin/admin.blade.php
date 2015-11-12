<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3>{{$sec_count}}</h3>
        <p>Secciones</p>
      </div>
      <div class="icon">
        <i class="ion-briefcase"></i>
      </div>
      <a href="{!!URL::to('/secciones')!!}" class="small-box-footer">Mas Informacion <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div><!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>{{$cat_count}}</h3>
        <p>Categorias</p>
      </div>
      <div class="icon">
        <i class="ion-bag"></i>
      </div>
      <a href="{!!URL::to('/categorias')!!}" class="small-box-footer">Mas Informacion <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div><!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3>{{$art_count}}</h3>
        <p>Articulos</p>
      </div>
      <div class="icon">
        <i class="ion-clipboard"></i>
      </div>
      <a href="{!!URL::to('/articulos')!!}" class="small-box-footer">Mas Informacion <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div><!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3>{{$pint_count}}</h3>
        <p>Pinturas</p>
      </div>
      <div class="icon">
        <i class="ion-images"></i>
      </div>
      <a href="{!!URL::to('/pinturas')!!}" class="small-box-footer">Mas Informacion <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div><!-- ./col -->
</div><!-- /.row -->
<br><br>
<div class="row">
  <div class="col-lg-6 col-xs-12" align="center">
    <a href="/poema" target="_new">
        {!!Html::image('asset/img/bg.jpg', 'User Image')!!}
    </a>
  </div>
  <div class="col-lg-6 col-xs-12" align="center">
    <a href="/pintura" target="_new">
        {!!Html::image('asset/img/bg2.jpg', 'User Image')!!}
    </a>
  </div>
</div>
