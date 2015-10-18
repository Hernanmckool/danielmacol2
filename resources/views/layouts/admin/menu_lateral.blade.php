      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
            {!!Html::image('asset/dist/img/user2-160x160.jpg', 'User Image', array('class' => 'img-circle'))!!}
            </div>
            <div class="pull-left info">
              <p>
              Hernan Perez
              </p>
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

              <!-- Menu 2 -->              
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-pie-chart"></i>
                  <span>Operaciones</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                  <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Departamentos</a></li>
                  <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                  <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                </ul>
              </li>
        </section>
        <!-- /.sidebar -->
      </aside>