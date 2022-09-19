<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  {{--<meta name="_token" content="{{{ csrf_token() }}}"/>--}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  {{--datetime picker--}}
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
  <link rel="stylesheet" type="text/css" href="jquery.datetimepicker.min.css"/>
  <!-- jQuery -->

  <script src="plugins/jquery/jquery.min.js"></script>


<!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>



</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="بحث" aria-label="Search">
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
      {{--<li class="nav-item dropdown">--}}
        {{--<a class="nav-link" data-toggle="dropdown" href="#">--}}
          {{--<i class="far fa-comments"></i>--}}
          {{--<span class="badge badge-danger navbar-badge">3</span>--}}
        {{--</a>--}}
        {{--<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
          {{--<a href="#" class="dropdown-item">--}}
            {{--<!-- Message Start -->--}}
            {{--<div class="media">--}}
              {{--<img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">--}}
              {{--<div class="media-body">--}}
                {{--<h3 class="dropdown-item-title">--}}
                  {{--Brad Diesel--}}
                  {{--<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>--}}
                {{--</h3>--}}
                {{--<p class="text-sm">Call me whenever you can...</p>--}}
                {{--<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<!-- Message End -->--}}
          {{--</a>--}}
          {{--<div class="dropdown-divider"></div>--}}
          {{--<a href="#" class="dropdown-item">--}}
            {{--<!-- Message Start -->--}}
            {{--<div class="media">--}}
              {{--<img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
              {{--<div class="media-body">--}}
                {{--<h3 class="dropdown-item-title">--}}
                  {{--John Pierce--}}
                  {{--<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>--}}
                {{--</h3>--}}
                {{--<p class="text-sm">I got your message bro</p>--}}
                {{--<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<!-- Message End -->--}}
          {{--</a>--}}
          {{--<div class="dropdown-divider"></div>--}}
          {{--<a href="#" class="dropdown-item">--}}
            {{--<!-- Message Start -->--}}
            {{--<div class="media">--}}
              {{--<img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
              {{--<div class="media-body">--}}
                {{--<h3 class="dropdown-item-title">--}}
                  {{--Nora Silvester--}}
                  {{--<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>--}}
                {{--</h3>--}}
                {{--<p class="text-sm">The subject goes here</p>--}}
                {{--<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<!-- Message End -->--}}
          {{--</a>--}}
          {{--<div class="dropdown-divider"></div>--}}
          {{--<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>--}}
        {{--</div>--}}
      {{--</li>--}}
      <!-- Notifications Dropdown Menu -->
      {{--<li class="nav-item dropdown">--}}
        {{--<a class="nav-link" data-toggle="dropdown" href="#">--}}
          {{--<i class="far fa-bell"></i>--}}
          {{--<span class="badge badge-warning navbar-badge">15</span>--}}
        {{--</a>--}}
        {{--<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
          {{--<span class="dropdown-item dropdown-header">15 Notifications</span>--}}
          {{--<div class="dropdown-divider"></div>--}}
          {{--<a href="#" class="dropdown-item">--}}
            {{--<i class="fas fa-envelope mr-2"></i> 4 new messages--}}
            {{--<span class="float-right text-muted text-sm">3 mins</span>--}}
          {{--</a>--}}
          {{--<div class="dropdown-divider"></div>--}}
          {{--<a href="#" class="dropdown-item">--}}
            {{--<i class="fas fa-users mr-2"></i> 8 friend requests--}}
            {{--<span class="float-right text-muted text-sm">12 hours</span>--}}
          {{--</a>--}}
          {{--<div class="dropdown-divider"></div>--}}
          {{--<a href="#" class="dropdown-item">--}}
            {{--<i class="fas fa-file mr-2"></i> 3 new reports--}}
            {{--<span class="float-right text-muted text-sm">2 days</span>--}}
          {{--</a>--}}
          {{--<div class="dropdown-divider"></div>--}}
          {{--<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>--}}
        {{--</div>--}}
      {{--</li>--}}
      {{--<li class="nav-item">--}}
        {{--<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i--}}
            {{--class="fas fa-th-large"></i></a>--}}
      {{--</li>--}}
      {{--<li>--}}
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form_admin').submit();">تسجيل الخروج</a>
        <form id="logout-form_admin" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
          {{--<input type="hidden" name="_token" value="FL8x2NoADbeg5zEVnUCnN4o542GUFSWy12W1Xpwh">--}}
        </form>

      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">سكك حديد سوريا</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="admin_user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">أية شبيب</a>
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
                لوحة التحكم
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{URL::to('user')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                المستخدمون
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="{{URL::to('train')}}" class="nav-link">
              <i class="nav-icon fas fa fa-train"></i>
              <p>
                القطارات
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="{{URL::to('station')}}" class="nav-link">
              <i class="nav-icon fas  fa-home"></i>
              <p>
                المحطات
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
           
          </li>
          <li class="nav-item has-treeview">
            <a href="{{URL::to('trains_stations')}}" class="nav-link">
              <i class="nav-icon fas fa-map-signs"></i>
              <p>
                جدولة القطارات
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="{{URL::to('seats')}}" class="nav-link">
              <i class="nav-icon fas fa-wheelchair"></i>
              <p>
                المقاعد
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="{{URL::to('admin_reversation')}}" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                حجوزات
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            
          </li>
            <li class="nav-item has-treeview">
            <a href="{{URL::to('admin_offer')}}" class="nav-link">
              <i class="nav-icon fas  fa-address-card"></i>
              <p>
                العروض
                <i class="fas fa-angle-left right"></i>
              </p>
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          {{--<div class="col-md-10 col-md-offset-4">--}}

            {{--<div class="panel panel-default">--}}

              {{--<div class="panel-heading"></div>--}}

              {{--<div class="panel-body">--}}
              {{----}}
                {{--<canvas id="canvas" height="280" width="600"></canvas>--}}
                  {{--<div class="chart-container">--}}
                      {{--<div class="pie-chart-container">--}}
                          {{--<canvas id="pie-chart"></canvas>--}}
                      {{--</div>--}}
                  {{--</div>--}}
                  {{--<div class="chart-container">--}}
                      {{--<div class="pie-chart-container">--}}
                          {{--<canvas id="pie-chart-users"></canvas>--}}
                      {{--</div>--}}
                  {{--</div>--}}



              {{--</div>--}}

            {{--</div>--}}

          {{--</div>--}}
          {{--<div class="col-12 col-sm-6 col-md-3">--}}
            {{--<div class="info-box">--}}
              {{--<span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>--}}

              {{--<div class="info-box-content">--}}
                {{--<span class="info-box-text">عدد الرحلات السنوي</span>--}}
                <!--<span class="info-box-number">-->
                 <!-- 10-->
                  <!--<small>%</small>-->
                <!--</span>-->
              {{--</div>--}}
              <!-- /.info-box-content -->
            {{--</div>--}}
            <!-- /.info-box -->
          {{--</div>--}}
          <!-- /.col -->
          <!--<div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <!--<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>-->

              <!--<div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
              </div>-->
              <!-- /.info-box-content -->
            <!--</div>
            <!-- /.info-box -->
          <!--</div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- /.row -->

       
        <!-- /.row -->
{{--user       --}}
@include('users.create')
@include('users.update')
 {{--train       --}}
@include('trains.create')
@include('trains.update')
 {{--station       --}}
@include('station.create')
@include('station.update')
{{--trains_stations       --}}
{{-- @include('trains_stations.update')--}}
{{--seats--}}
{{--@include('seats.create')--}}

      <div  class="main_content">

        @yield('user_content')
        @yield('train_content')
        @yield('station_content')
        @yield('trains_stations_content')
        @yield('seat_content')
        @yield('offer_content')
        @yield('reversation_content')
        @yield('chart_content')
      </div>
 </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
     
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->

  </aside>
  <!-- /.control-sidebar -->
    
  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
<script src="js/user/user.js"></script>
<script src="js/train/train.js"></script>
<script src="js/station/station.js"></script>
<script src="js/trains_stations/train_station.js"></script>
<script src="js/seat/seat.js"></script>
<script src="js/offer/offer.js"></script>


{{--date time picker--}}
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="jquery.datetimepicker.min.js"></script>
<script src="jquery.datetimepicker.full.min.js"></script>
{{--time picker--}}
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script>

    $('#demo').datetimepicker({

        inline:true,

    });
    $('#demo1').datetimepicker({

        inline:true,

    });
    $('#demo2').datetimepicker({

        inline:true,

    });
    $('#demo3').datetimepicker({

        inline:true,

    });
    $('#demo4').datetimepicker({

        inline:true,

    });
    $('#demo5').datetimepicker({

        inline:true,

    });
    $('#demo6').datetimepicker({

        inline:true,

    });
    $('#demo7').datetimepicker({

        inline:true,

    });

</script>
{{--time picker--}}
<script>
    $('.timepicker').timepicker({
        timeFormat: 'h:m:s',
        interval: 60,
        minTime: '10',
        maxTime: '6:00pm',
        defaultTime: '11',
        startTime: '10:00',
        dynamic: false,
        dropdown: true,
        scrollbar: true
    });
</script>

</body>
</html>
