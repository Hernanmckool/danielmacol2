  <?php
  $im=Auth::user()->path;
  ?>
      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>D</b>M</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Daniel</b>&nbsp;Macol</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  {!!Html::image('asset/avartars/'.$im, 'User Image', array('class' => 'user-image'))!!}                    
                    <span>
                    {!!Auth::user()->nombre!!}&nbsp;&nbsp;{!!Auth::user()->apellido!!}
                    <i class="caret"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header bg-light-blue">
                    {!!Html::image('asset/avartars/'.$im, 'User Image', array('class' => 'img-circle'))!!}                    
                        <p>{!!Auth::user()->nombre!!}&nbsp;&nbsp;{!!Auth::user()->apellido!!}</p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <a href="/logout" class="btn btn-default btn-flat">
                            Salir
                        </a>
                    </li>
                </ul>
              </li>              
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
      </header>
<?php
/*
                         @foreach($prof_nom as $prof)
                         {{$prof->nombre}}
                         @endforeach

                                           {!!Auth::user()->nombres!!}&nbsp;{!!Auth::user()->apellidos!!}
*/
?>
                         
