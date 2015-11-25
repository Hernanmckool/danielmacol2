<?php
  $im=Auth::user()->path;
  if($im==''){
    $im= 'usuario.png';
  }
?>
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
            {!!Html::image('asset/avartars/'.$im, 'User Image', array('class' => 'img-circle'))!!}</div>
            <div class="pull-left info">
              <p>{!!Auth::user()->nombre!!}&nbsp;&nbsp;{!!Auth::user()->apellido!!}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> En linea</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Menu Principal</li>

              <!-- Menu 1 -->              
              <li class="active treeview">
                <a href="#">
                  <i class="fa fa-pie-chart"></i>
                  <span>Operaciones</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu"> 
                  <li><a href="{!!URL::to('/usuario')!!}"><i class="glyphicon glyphicon-user"></i> Usuarios</a></li>
                  <li><a href="{!!URL::to('/secciones')!!}"><i class="ion-briefcase"></i>&nbsp;&nbsp;&nbsp;&nbsp;Secciones</a></li>
                  <li><a href="{!!URL::to('/categorias')!!}"><i class="ion-bag"></i>&nbsp;&nbsp;&nbsp;&nbsp;Categorias</a></li>
                  <li><a href="{!!URL::to('/articulos')!!}"><i class="ion-clipboard"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Articulos</a></li>
                  <li><a href="{!!URL::to('/pinturas')!!}"><i class="ion-images"></i>&nbsp;&nbsp;&nbsp;&nbsp;Pinturas</a></li>
                </ul>
              </li>
        </section>
        <!-- /.sidebar -->
      </aside>