	<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Đặng Văn Hùng">
    <title>QUẢN TRỊ WEBSITE</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('css/admin/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/admin/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('css/admin/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{{asset('css/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{asset('css/admin/bower_components/datatables-responsive/css/dataTables.responsive.css')}}" rel="stylesheet">

	<script src="{{asset('css/admin/js/ckeditor/ckeditor.js')}}"></script>
	<script src="{{asset('css/admin/js/ckfinder/ckfinder.js')}}"></script>
	<script>
		var baseURL = "{!! url('/') !!}";
	</script>
	<script src="{{asset('css/admin/js/func_ckfinder.js')}}"></script>

	<!-- link icon -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<link type= "text/css" rel="stylesheet" href="{{asset('css/admin/main.css')}}">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">QUẢN TRỊ WEBSITE</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown" style = "float: right;">

					@if(Route::has('login'))
						@auth
							<div class="user_info" style="margin-top: 13px;">
								<li class="header__navbar-item header__navbar-user">
									<img src = "{{asset(Auth::user()->us_avatar)}}" alt="" class="header__navbar-user-img">
									<span class="header__navbar-user-name">{{ Auth::user()->us_name }}</span>
									<ul class="header__navbar-user-menu">
										<li class="header__navbar-user-item">
											<a href="{{route('admin.user.edit',Auth::user()->us_id)}}">Profile</a>
										</li>
										<li class="header__navbar-user-item">
											<a href="/">Trở về trang chủ</a>
										</li>

										<li class="header__navbar-user-item">
											<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Đăng xuất') }}</a>
										</li>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</ul>
								</li>
							</div>
						@endauth
					@endif
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation" style="margin-top:0 !important">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

						<li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('admin.user.getList')}}">Danh sách User</a>
                                </li>
								<li>
                                    <a href="{{route('admin.user.add')}}">Tạo user</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

						<li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Tiêu chí đánh giá<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('admin.evaluation.getList')}}">Danh sách tiêu chí</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.evaluation.add')}}">Tạo tiêu chí</a>
                                </li>
                            </ul>
                        </li>

						<li>
                            <a><i class="fa fa-bar-chart-o fa-fw"></i>Trường<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li>
                                    <a href="{{route('admin.school.getList')}}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.school.add')}}">Thêm mới</a>
                                </li>
                            </ul>
                        </li>

						<li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Thống kê<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('admin/statistic') }}">Xem thống kê</a>
                                </li>
								<li>
                                    <a href="{{ url('admin/report') }}">Xuất thống kê</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    @include('admin.thongbao')
					@yield('content')
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div><!-- /#page-wrapper -->


    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{asset('css/admin/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('css/admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- DataTables JavaScript -->
    <!--<script src="{{asset('css/admin/bower_components/dataTables/media/js/jquery.dataTables.js')}}"></script>-->
    <script src="{{asset('css/admin/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('css/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>

	<!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('css/admin/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>
	<!-- Custom Theme JavaScript -->
    <script src="{{asset('css/admin/dist/js/sb-admin-2.js')}}"></script>
	<script src="{{asset('css/admin/js/myscript.js')}}"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
</body>

</html>
