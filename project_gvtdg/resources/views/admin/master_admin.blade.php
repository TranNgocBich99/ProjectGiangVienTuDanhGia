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

	<!--  Validate
	<script type = "text/javascript" src = "{{asset('css/admin/js/Validate/validate.js')}}"></script>
	<script type="text/javascript" src = "{{asset('css/admin/js/Validate/main.js')}}"></script>
	<link type= "text/css" rel="stylesheet" href="{{asset('css/admin/validateStyle/validation.css')}}">
	-->
	<style>
		table,tr,td,th{
			text-align:center;
			line-height:normal;
			vertical-align: middle !important;

		}
		.input-message {
			  position: unset;
			  top: 0px;
			  left: 0px;
			  background: #fff;
			  padding: 5px;
			  border-radius: 0px;
			  width: 100% !important;
			  font-size: 14px;
			  box-shadow: 0 0 0px #fff !important;
			  min-height: 20px;
			  display: none;
			  animation: fadeIn .5s;
			  color:red;
		}
		table.dataTable thead .sorting_asc:after {
			content: "" !important;
		}

		table.dataTable thead .sorting_desc:after {
			content: "" !important;
		}

		table.dataTable thead .sorting:after {
			content: "" !important;
		}
		.user::before{
			font-size: 1.4em;
			display: block;
			width: 0;
			height: 0;
			content: '';
			pointer-events: none;
			border-right: 10px solid transparent;
			border-bottom: 10px solid #fff;
			border-left: 10px solid transparent;
			position: absolute;
			top: -.45em;
			right: .97em;
		}
		#wrapper button:hover{
			box-shadow: 0 4px 5px 0 rgba(20, 156, 137, 0.52), 0 1px 10px 0 rgb(150, 209, 201), 0 2px 4px -1px rgb(141, 206, 197);

		}
		#wrapper button{
			border: none;
		}
		#wrapper button{
			transition:all .2s;
		}

	</style>
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
                <li class="dropdown" style = "line-height: 50px;float: right;">

					@if(Route::has('login'))
						@auth
							<a style = "padding:0;color: #000!important;" class="dropdown-toggle" data-toggle="dropdown" href="#">
								<img style = "width:26px;cursor: pointer;" class = "img-circle img_click" src = "{{Auth::user()->user_avatar}}" onclick = "my_function()"/>
								<span>{{ Auth::user()->name }}</span>
								<i class="fa fa-caret-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-user user">

								<li>
									<a href="{{route('admin.user.edit',Auth::user()->us_id)}}"><i style = "margin-right: 4px;" class="fa fa-user fa-fw"></i>{{ Auth::user()->name }}</a>
								</li>
								<li>
									<a href="{{route('admin.user.edit',Auth::user()->us_id)}}"><i class="fa fa-gear fa-fw"></i> Settings</a>
								</li>
								<li>
									<a href="/"><i class="fas fa-arrow-circle-left"></i>Trở về trang chủ</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
										<i class="fas fa-sign-out-alt"></i>
										{{ __('Logout') }}
									</a>
								</li>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</ul>
						@endauth
					@endif
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

						<li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('admin.user.getList')}}">Danh sách User</a>
                                </li>
								<li>
                                    <a href="#">Tạo user</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

						<li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Tiêu chí đánh giá<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Danh sách tiêu chí</a>
                                </li>
                                <li>
                                    <a href="#">Tạo tiêu chí</a>
                                </li>
                            </ul>
                        </li>

						<li>
                            <a><i class="fa fa-bar-chart-o fa-fw"></i>Trường<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li>
                                    <a href="#">Danh sách</a>
                                </li>
                                <li>
                                    <a href="#">Thêm mới</a>
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
                                    <a href="">Xuất thống kê</a>
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
