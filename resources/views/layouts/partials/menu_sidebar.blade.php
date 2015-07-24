<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar sidebar-">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    @if (Auth::user())
    <div class="user-panel">
      <div class="pull-left image">
        <img src="/bower_components/admin-lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <span><small><a href="#"><i class="fa fa-circle text-green">&nbsp;</i> Online</a></small></span>
      </div>
    </div>
    @endif

    <!-- search form -->
    {{-- <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Buscar..."/>
        <span class="input-group-btn">
          <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form> --}}

    <ul class="sidebar-menu">
      {{-- <li class="header">MENU PRINCIPAL</li> --}}
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
        </ul>
      </li>
      {{-- <li class="treeview">
        <a href="#">
          <i class="fa fa-file-text"></i> <span>Relatórios</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Visão Geral</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Relatório 1</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Relatório 2</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Relatório 3</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Relatório 4</a></li>
          <li>
            <a href="#"><i class="fa fa-circle-o"></i> Nível 1 <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Nível 2</a></li>
              <li>
                <a href="#"><i class="fa fa-circle-o"></i> Nível 2 <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="#"><i class="fa fa-circle-o"></i> Nível 3</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Nível 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Nível 1</a></li>
        </ul>
      </li> --}}
      {{-- <li class="{{ set_active('blog') }}">
        <a href="{!! route('blog.index') !!}">
          <i class="fa fa-bookmark"></i> <span>Blog</span>
        </a>
      </li> --}}
      {{-- <li class="{{ set_active('livros') }}">
        <a href="{!! route('livros.index') !!}">
          <i class="fa fa-book"></i> <span>Livros</span>
        </a>
      </li> --}}
      {{-- <li class="header">LABELS</li>
      <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> --}}
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>