  <?php
  $im=Auth::user()->path;
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
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Buscar...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Menu Principal</li>

              <!-- Menu 1 -->              
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-pie-chart"></i>
                  <span>Operaciones</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu"> 
                  <li><a href="{!!URL::to('/usuario')!!}"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                  <li><a href="{!!URL::to('/secciones')!!}"><i class="fa fa-circle-o"></i> Secciones</a></li>
                  <li><a href="{!!URL::to('/categorias')!!}"><i class="fa fa-circle-o"></i> Categorias</a></li>
                  <li><a href="{!!URL::to('/articulos')!!}"><i class="fa fa-circle-o"></i> Articulos</a></li>
                </ul>
              </li>
        </section>
        <!-- /.sidebar -->
      </aside>