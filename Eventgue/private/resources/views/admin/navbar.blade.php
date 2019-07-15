<header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>G</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Event</b>Gue</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('public/adminlte/dist/img/ava.jpg')}}" class="user-image" alt="User Image">
              {{ Auth::user()->name }} <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- Menu Footer-->
              <li class="user-footer">
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset('public/adminlte/dist/img/ava.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                {{ Auth::user()->name }} <p></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="{{ url('admin/') }}"><i class="fa fa-book"></i> <span>Dashboard</span></a></li>
            <li><a href="{{ url('admin/event') }}"><i class="fa fa-list-alt"></i> <span>Event</span></a></li>
            <li><a href="{{ url('admin/kategori') }}"><i class="fa fa-th"></i> <span>Kategori Event</span></a></li>
            <li><a href="{{ url('admin/user') }}"><i class="fa fa-user"></i> <span>User</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
