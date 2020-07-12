<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Karisma Athlete Selection System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/list')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <strong><bold>{{ Auth::user()->name }}</bold></strong> <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/list" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Karisma Selection</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Jsp Administrator
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/list')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    @if($layout == 'index')
        <div class="container-fluid mt-4">
          <div class="container-fluid mt-4">
            <div class="row justify-content-center">
              <section class="col-md-12">
                @include("layouts/adminJspList")
              </section>
            </div>
          </div>
        </div>
    @elseif($layout  == 'create')
      <div class="container-fluid mt-4">
          <div class="row">
            <section class="col-md-11"  style="left: 5%"  >
              <div class="card mb-3" >
                <div class="card-body">
                    <h4>Enter the information for new admin</h4><br>
                    <form action="/store" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Matrix Number</label>
                        <input name="matrixNumber" type="text" class="form-control @error('matrixNumber') is-invalid @enderror" placeholder="Enter matrix number">
                        @error('matrixNumber')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>First Name</label>
                        <input name="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror"  placeholder="Enter first name">
                        @error('firstName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input name="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror"  placeholder="Enter last name">
                        @error('lastName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Gender</label><br>
                        <input type="radio" name="gender" value="Male" class="@error('gender') is-invalid @enderror" > Male<br>
                        <input type="radio" name="gender" value="Female" class="@error('gender') is-invalid @enderror" > Female<br>
                        @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input name="phoneNumber" type="text" class="form-control @error('phoneNumber') is-invalid @enderror"  placeholder="Enter phone number">
                        @error('phoneNumber')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Role</label>
                        <input name="role" type="text" class="form-control @error('role') is-invalid @enderror"  placeholder="Enter role">
                        @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Email Address</label>
                        <input name="emailAddress" type="text" class="form-control @error('emailAddress') is-invalid @enderror"  placeholder="Enter email address">
                        @error('emailAddress')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Courses</label>
                        <input name="courses" type="text" class="form-control @error('courses') is-invalid @enderror"  placeholder="Enter course">
                        @error('courses')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>UiTM Branch</label><br>
                        <select id="branch" name="branch" class="form-control @error('branch') is-invalid @enderror">
                          <option value="Jasin">Jasin</option>
                          <option value="Bandaraya">Bandaraya</option>
                          <option value="Lendu">Lendu</option>
                        </select>
                        @error('branch')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <input type="submit" class="btn btn-info" value="Save">
                    <input type="reset" class="btn btn-warning" value="Reset">
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
    @elseif($layout  == 'edit')
    <div class="container-fluid mt-4">
          <div class="row">
            <section class="col-md-11"  style="left: 5%" >
              <div class="card mb-3">
                  <div class="card-body">
                      <h4>Update Admin Info</h4><br>
                      <form action="{{ url('/update/' . $adminJsp->id) }}" method="POST">
                      @csrf
                      <div class="form-group">
                          <label>Matrix Number</label>
                          <input value="{{ $adminJsp->matrixNumber }}" name="matrixNumber" type="text" class="form-control"  placeholder="Enter matrix number">
                      </div>
                      <div class="form-group">
                          <label>First Name</label>
                          <input value="{{ $adminJsp->firstName}}" name="firstName" type="text" class="form-control"  placeholder="Enter first name">
                      </div>
                      <div class="form-group">
                          <label>Last Name</label>
                          <input value="{{ $adminJsp->lastName}}" name="lastName" type="text" class="form-control"  placeholder="Enter last name">
                      </div>
                      <div class="form-group">
                          <label>Gender</label><br>
                          <input type="radio" name="gender" value="Male" {{ ($adminJsp -> gender=="Male")? "checked" : "" }} > Male<br>
                          <input type="radio" name="gender" value="Female" {{ ($adminJsp -> gender=="Female")? "checked" : "" }} > Female<br>
                      </div>
                      <div class="form-group">
                          <label>Phone Number</label>
                          <input value="{{ $adminJsp->phoneNumber}}" name="phoneNumber" type="text" class="form-control"  placeholder="Enter phone number">
                      </div>

                      <div class="form-group">
                          <label>Role</label>
                          <input value="{{ $adminJsp->role}}" name="role" type="text" class="form-control"  placeholder="Enter role">
                      </div>

                      <div class="form-group">
                          <label>Email Address</label>
                          <input value="{{ $adminJsp->emailAddress}}" name="emailAddress" type="text" class="form-control"  placeholder="Enter email address">
                      </div>

                      <div class="form-group">
                          <label>Courses</label>
                          <input value="{{ $adminJsp->courses}}" name="courses" type="text" class="form-control"  placeholder="Enter course">
                      </div>

                      <div class="form-group">
                          <label>UiTM Branch</label><br>
                          <select id="branch" name="branch">
                            <option value="Jasin" {{ ($adminJsp -> branch=="Jasin")? "selected" : "" }} >Jasin</option>
                            <option value="Bandaraya" {{ ($adminJsp -> branch=="Bandaraya")? "selected" : "" }}>Bandaraya</option>
                            <option value="Lendu" {{ ($adminJsp -> branch=="Lendu")? "selected" : "" }}>Lendu</option>
                          </select>
                      </div>

                      <input type="submit" class="btn btn-info" value="Update">
                      <input type="reset" class="btn btn-warning" value="Reset">
                    </form>
                  </div>
              </div>
            </section>
          </div>
        </div>
    @endif
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
