<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>AdminLTE 3 | Starter</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper" id="app">


    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

      <!-- Right navbar links -->

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <!-- <router-link to="/dashboard" class="brand-link"> -->
      <a href="/dashboard" class="brand-link">
        <img src="./images/logoD.png" alt="Daliran Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Ally Vote</span>
        <!-- </router-link> -->
      </a>
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="./images/profile.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="/profile" class="d-block">
              <!-- <router-link to="/profile" class="d-block"> -->
              <p>
                {{ Auth::user()->name }}
              </p>
                  <span class="d-block text-muted">
                      {{ Auth::user()->type }}
                  </span>
              <!-- </router-link> -->
            </a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <router-link to="/dashboard" active-class="active" class="nav-link">
                <!-- <i class="nav-icon fas fa-th"></i> -->
                <i class="nav-icon fas fa-tachometer-alt green"></i>
                <p>
                  Dashboard

                </p>
              </router-link>

            </li>
            @can('isAdmin')
            <li class="nav-item">
              <router-link to="#" active-class="active" class="nav-link">
                <i class="nav-icon fas fa-cog orange"></i>
                <p>
                  Manage
                  <i class="right fas fa-angle-left"></i>
                </p>
              </router-link>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <router-link to="/users" active-class="active" class="nav-link">
                    <i class="fas fa-users nav-icon blue"></i>
                    <p>Users</p>
                  </router-link>
                </li>
                <li class="nav-item">
                  <router-link to="/developer" active-class="active" class="nav-link">
                    <i class="fas fa-cogs nav-icon yellow"></i>
                    <p>Developer</p>
                  </router-link>
                </li>
              </ul>
            </li>
            @endcan

            <li class="nav-item">
              <router-link to="/profile" active-class="active" class="nav-link">
                <!-- <i class="nav-icon fas fa-th"></i> -->
                <i class="nav-icon fas fa-user purple"></i>
                <p>
                  Profile

                </p>
              </router-link>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-power-off red"></i>
                <p>
                  {{ __('Log Out') }}
                </p>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div id="app">
            <!-- <router-link class="items" to="/Dashboard">Dashboarddddddd</router-link> -->
            <router-view></router-view>
            <vue-progress-bar></vue-progress-bar>
          </div>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
    </div>
    <!-- ./wrapper -->
    
      @auth
      <script>
          window.user = @json(auth()->user())
      </script>
      @endauth
    
   
    <!-- REQUIRED SCRIPTS -->
    
    <!-- jQuery -->
    <script src="{{ asset('js/app.js') }}"></script>
    
    <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  </body>

</html>