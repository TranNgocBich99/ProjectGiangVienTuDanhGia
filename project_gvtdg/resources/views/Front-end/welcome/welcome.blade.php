<!DOCTYPE html>
<html lang="en"><head>
	<title> VNU-TRANG CHỦ </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script src="{{asset('js/FrontEndJs/home/main.js')}}"></script>
	<script src="{{asset('js/FrontEndJs/home/bootstrap.js')}}"></script>
	<link type= "text/css" rel="stylesheet" href="{{asset('css/FrontEndCss/home/main.css')}}">
	<link type= "text/css" rel="stylesheet" href="{{asset('css/FrontEndCss/home/font-awesome.css')}}">
	<link type= "text/css" rel="stylesheet" href="{{asset('css/FrontEndCss/home/bootstrap.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
	<div class="container">
		<div class="header">
			<div class="row" >
				<div class="col-sm-6">
					<img src="{{asset('/uploads/home/img/logo.png')}}" alt="">
				</div>

				<div class="col-sm-6" style=" padding-top: 20px;float: right;">
					<div class="log" style="padding: 10px;">
						@if (Route::has('login'))
							@auth
								<div class = "img-user" style = "position:relative;padding: 0 15px;">
									<div class="user_info" style="line-height: 35px;">
										<p title = "{{ Auth::user()->us_name }}" style="font-size: 18px;float: right;cursor:pointer" onclick = "my_function()">Xin chào,{{ Auth::user()->us_name }}</p>
										<img style = "width:35px;height:35px;cursor: pointer;float: right;" class = "img-circle img_click" src = "{{asset(Auth::user()->us_avatar)}}" onclick = "my_function()"/>
									</div>
									<li id = "user-logout" 
											style = "display:none;position:absolute;
												right: 0px;width: 100px;width: 100px;
												text-align: center;background-color: #fff;
												z-index: 1000;list-style: none;padding: 0 !important;;margin: 0 !important;height: 160px;">
										<!-- Right Side Of Navbar -->
										<ul class="" style = "float: right;padding: 0;width:100%">
											<!-- Authentication Links -->
											@guest
												<li class="" style = "width:100%">
													<a class="user-login" href="{{ route('login') }}">{{ __('Login') }}</a>
												</li>
											@else
												<li class="name_logout" style = "width:100%;list-style: none;">
											
													<div class = "img_user_data">
														<a title = "Admin" href = "#" style = "display:block;margin:0" ><img class = "img-circle" src = "{{asset(Auth::user()->us_avatar)}}"/></a>
														<div class = "user_data">
															<span class = "name_user" style = "display: block">
																	<p title = "{{ Auth::user()->us_name }}">{{ Auth::user()->us_name }}</p>
															</span>
															@if(Auth::user()->us_is_admin === 1)   
																<a href = "{{route('admin.user.getList')}}" 
																	style = "
																		font-size: .8em;
																		padding: 0.50em .75em;
																		background-color: #E3E9ED;
																		float: left;
																		display: block;
																		margin-left: 21px;
																		font-weight: bold;
																		font-size: 13px;
																		color: #8e7f7f;" 
																	class = "btn btn-gray btn-small user_profile">Trang quản trị »</a>
															@else
																<a href = "{!! URL::route('getForm', Auth::user()->us_id) !!}" 
																	style = "
																		font-size: .8em;
																		padding: 0.50em .75em;
																		background-color: #E3E9ED;
																		float: left;
																		display: block;
																		margin-left: 21px;
																		font-weight: bold;
																		font-size: 13px;
																		color: #8e7f7f;" 
																	class = "btn btn-gray btn-small user_profile">Phiếu đánh giá »</a>
															@endif
														</div>
													</div>

													<div class="user_logout">
														<a style = "width: 50%;display: block;margin: 0;color: #8e7f7f !important;" class="user-logout" href="{{ route('logout') }}"
														   onclick="event.preventDefault();
																		 document.getElementById('logout-form').submit();">
															{{ __('Logout') }}
														</a>
														<a style = "width: 50%;display: block;margin: 0;color: #8e7f7f !important;" class="user-logout" href="{{route('getProfile',Auth::user()->us_id)}}">
															{{ __('Edit profile') }}
														</a>
														<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
															@csrf
														</form>
													</div>
												</li>
											@endguest
										</ul>
									</li>
								</div>
							@else
								@if (Route::has('register'))
									<li style="list-style:none" class = "li-login" onmouseover = "functionMouseOver()" onmouseout = "functionMouseOut()">
										<a  class = "login" title = "Login" 
											style = "height:100%;float:right;
													display:block;padding: 12px !important;
													color: #007f49 !important;text-decoration: none;
													border-radius: 6px;font-size: 14px !important;
													border: 1px solid #007f49 !important;margin-bottom: 15px;margin-right: 15px;
													background-color:#fff;" href="{{ route('login') }}">
											ĐĂNG NHẬP</a>
									</li>
								@endif
							@endauth
						@endif
					</div>
					
					<div class="se" style="float: right;margin-right: 15px;">
						<form class="example">
							<input type="text" placeholder="Tìm kiếm" name="search">
							<button type="submit"><i class="fa fa-search"></i></button>
						 </form>
					</div>
					
				</div>
			</div>
		</div>
		<div class="menu" style="padding-top: 15px;">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<ul>
							<li><a>TRANG CHỦ</a></li>
							<li><a>GIỚI THIỆU</a></li>
							<li><a>ĐÀO TẠO</a></li>
							<li><a>KHOA HỌC CÔNG NGHỆ</a></li>
							<li><a>HỢP TÁC & PHÁT TRIỂN</a></li>
							<li><a>SINH VIÊN</a></li>
							<li><a>CÁN BỘ</a></li>
							<li><a>TRANG CHỦ</a></li>
							<li><a>TUYỂN DỤNG</a></li>
						
						</ul>
					</div>
				</div>
				
			</div>
			
		</div>

		<div class="content" style="padding-top: 15px;">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1"></li>
								<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner" role="listbox">
								<div class="item active">
										<img src="{{asset('/uploads/home/img/1.jpg')}}" style="width: 800px; height: 293px; position: relative;">
										<div class="caption" ></div>
								</div>
								<div class="item">
										<img src="{{asset('/uploads/home/img/2.jpg')}}" style="width: 800px;img: 100%; height: 293px; position: relative;"  >
										<div class="caption" >
											
										</div>
								</div>
								<div class="item">
										<img src="{{asset('/uploads/home/img/3.jpg')}}" style="width: 800px; height: 293px; position: relative;">
										<div class="caption" >
											
										</div>
								</div>
							</div>
							<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								<span class="icon-prev" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								<span class="icon-next" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="donvi">
							<div>CÁC ĐƠN VỊ THÀNH VIÊN VÀ TRỰC THUỘC</div>
							<br>
							<ul>
								<li>TRƯỜNG ĐẠI HỌC THÀNH VIÊN</li>
								<li>KHOA TRỰC THUỘC</li>
								<li>VIỆN NGHIÊN CỨU</li>
								<li>TRUNG TÂM ĐÀO TẠO & NGHIÊN CỨU</li>
								<li>ĐƠN VỊ PHỤC VỤ</li>
							</ul>
						</div>
						<div class="anh">

							<table cellpadding="0" cellspacing="0" border="0" height="74px">
								<tbody><tr>
									<td>
										<a href="/schools" style="padding:0px;margin:0px;">
											<img src="{{asset('/uploads/home/img/9.jpg')}}" style="width:154px;height:74px" border="0">
										</a>
									</td><td>
									</td><td>
										<a href="http://dangky.vnu.edu.vn" style="padding:0px;margin:0px">
											<img src="{{asset('/uploads/home/img/10.jpg')}}" style="width:154px;height:74px" border="0">
										</a>
									</td><td>
								</td></tr>
							</tbody></table>
							<table cellpadding="0" cellspacing="0" border="0" height="74px">
								<tbody><tr>
									<td>
										<a href="/schools" style="padding:0px;margin:0px;">
											<img src="{{asset('/uploads/home/img/11.jpg')}}" style="width:154px;height:74px" border="0">
										</a>
									</td><td>
									</td><td>
										<a href="http://dangky.vnu.edu.vn" style="padding:0px;margin:0px">
											<img src="{{asset('/uploads/home/img/12.jpg')}}" style="width:154px;height:74px" border="0">
										</a>
									</td><td>
								</td></tr>
							</tbody></table>

							
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
	<div class="menu2" style="padding-top: 15px;">
		<div class="menu">	
			<div class="container">
				<table style="width:100%" cellpadding="0px" cellspacing="0px">
					<tbody><tr>
						<td>
							<div class="menu1" style="width: 175px; border-bottom-left-radius: 8px;" data-corner="BL 8px">
								<a href="/home/?C2661">
									DỰ ÁN ĐTXD HÒA LẠC
								</a>
							</div>
						</td>
						<td>
							<div class="menu1" style="margin-left: 2px; width: 175px; border-bottom-left-radius: 8px;" data-corner="BL 8px">
								<a href="http://taybac.vnu.edu.vn">
									CHƯƠNG TRÌNH TÂY BẮC
								</a>
							</div>
						</td>
						<td>
							<div class="menu1" style="margin-left: 2px; width: 175px; border-bottom-left-radius: 8px;" data-corner="BL 8px">
								<a href="https://js.vnu.edu.vn/bulletine/issue/archive">
									BẢN TIN ĐHQGHN
								</a>
							</div>
						</td>
						<td>
							<div class="menu1" style="margin-left: 2px; width: 175px; border-bottom-left-radius: 8px;" data-corner="BL 8px">
								<a href="https://js.vnu.edu.vn">
									&nbsp;TẠP CHÍ KHOA HỌC&nbsp;
								</a>
							</div>
						</td>
						<td>
							<div class="menu1" style="margin-left: 2px; width: 175px; border-bottom-left-radius: 8px;" data-corner="BL 8px">
								<a href="https://js.vnu.edu.vn">
									&nbsp;ĐẢM BẢO CHẤT LƯỢNG&nbsp;
								</a>
							</div>
						</td>
						
					</tr>
				</tbody></table>
			</div>
			
		</div>
	</div>
		<div class="content2" style="padding-top: 30px;">
			
			<div class="container">
				
				<div class="row">
					<div class="col-sm-8" style="background: -webkit-gradient(linear, left top, right top, from(#ffffff), to(#e7e7e7)); width: 770px">
						<div style=" color: red">TIN TỨC & SỰ KIỆN</div>
						<div class="row" style="padding-top: 30px;">
							<div class="col-sm-4">
								<img src="{{asset('/uploads/home/img/4.jpg')}}" alt="" style="width: 100%">
							</div>
							<div class="col-sm-8 co">
								
								<a class="title">Đào tạo Báo chí và Truyền thông trong bối cảnh công nghệ 4.0</a>
								<div><a href="
									" class="title2">Ngày 3/11, ĐHQGHN và Quỹ học bổng Posco TJ Park, 
									Hàn Quốc đã phối hợp tổ chức lễ trao học bổng năm học 2020 – 2021 
									cho 10 sinh viên tiêu biểu có thành tích học tập và rèn luyện xuất sắc.></a></div>
							</div>
						</div>
						<div class="row" style="padding-top: 30px;">
							<div class="col-sm-4">
								<img src="{{asset('/uploads/home/img/5.jpg')}}" alt="" style="width: 100%">
							</div>
							<div class="col-sm-8 co">
								<a class="title">VNU-VJU: Phòng thí nghiệm Vật liệu và Kiểm định công trình đạt chuẩn quốc gia thử nghiệm kiểm định vật liệu và công trình</a>
								<div><a href="
									" class="title2">Từ ngày 02 – 06/11/2020, ĐHQGHN phối hợp với Mạng lưới các trường đại học Đông Nam Á (ASEAN University Network - AUN) thực hiện kiểm định lần thứ 187 theo tiêu chuẩn AUN-QA đối với 04 chương trình đào tạo bằng hình thức trực ...</a></div>
							</div>
						</div>

						<div class="row" style="padding-top: 30px;">
							<div class="col-sm-4" >
								<img src="{{asset('/uploads/home/img/6.jpg')}}" alt="" style="width: 100%">
							</div>
							<div class="col-sm-8 co">
								<a class="title">Đào tạo báo chí thời công nghệ số: Nghề báo là sứ mệnh, đưa tin có trách nhiệm</a>
								<div><a href="
									" class="title2">Nghề báo không phải là nghề đơn thuần mà là một sứ mệnh. Nghề báo tồn tại không chỉ cho nó mà tồn tại vì phục vụ cộng đồng, phục vụ con người', PGS.TS Đặng Thu Hương Viện trưởng Viện Đào tạo báo chí và Truyền thông, Trường ...</a></div>
							</div>
						</div>
					</div>
					<div class="col-sm-4" style="background: -webkit-gradient(linear, left top, right top, from(#ffffff), to(#e7e7e7)); width: 335px">
						<div style=" color: red">THÔNG BÁO MỚI</div>
						<ul class="new">
							<li>
								<a class="link">Công tác nhân sự tháng 11/2020</a>
							</li>
							<li>
								<a class="link">Thông báo họp Hội đồng đánh giá luận án cấp Đại học Quốc gia </a>
							</li>
							<li>
								<a class="link">Thông báo tuyển sinh chương trình thạc sĩ Ngân hàng, Tài chính và Công nghệ tài chính (Fintech) 2020-2021</a>
							</li>
							<li>
								<a class="link">Danh các tập thể và cá nhân đề nghị khen thưởng cấp Nhà nước</a>
							</li>
							<li>
								<a class="link">Hướng dẫn hỗ trợ công bố quốc tế tại ĐHQGHN</a>
							</li>
							<li>
								<a class="link">Ngày hội thông tin du học Italy</a>
							</li>
							<li>
								<a class="link">Lễ trao học bổng Posco, Hàn Quốc năm học 2020 - 2021</a>
							</li>
							<li>
								<a class="link"> Trường ĐH Y Dược tuyển sinh sau đại học năm 2021</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
		<div class="footer2" style="padding-top: 30px;">
			<div class="container">
				<div class="imm">
				
					<img src="{{asset('/uploads/home/img/7.jpg')}}" alt="" style="width:220px; height:161px;">
					<img src="{{asset('/uploads/home/img/8.jpg')}}" alt="" style="width:550px;height:161px; padding-left: 30px">

					<div class="divimgrightbt">
						<div style="width: 309px; height: 160px;">
							 <table height="161" cellpadding="0px" cellspacing="0px">	 
							 <tbody><tr style="background-color:#af0900;padding-bottom: 1em">
										<td colspan="2">
											<a href="/ttsk/?C1660" style="font-size:14px; color:#fff!important;text-decoration: none; font-size: 14px;
												margin: 0;
												text-transform: uppercase;
												text-decoration: none;
												font-weight: bold;
												line-height: 25px;
												height: 25px;
												background: #af0900 no-repeat 5px 0;
												color: #fff;
												padding-left: 7px;">
											<b>
												SINH VIÊN
											</b>
											</a>
										</td>
							</tr>
							
									<tr style="background-color:#216934">
									<td style="width:35%"> 
										<a href="/ttsk/?C1660/N27144/Quy-hoc-bong-Posco-TJ-Park-trao-10-suat-hoc-bong-cho-sinh-vien-dHQGHN
											.htm"><img src="{{asset('/uploads/home/img/13.jpg')}}" alt="" style=" padding: 3px; height: 60px; width: 100px; padding-bottom: 2px;">
										</a>
									</td>
									<td style="padding-right:2px ">						
										<a style="font-size:13px; color: #fff!important; text-decoration:none; line-height: 18px;padding-bottom:2px" href="/ttsk/?C1660/N27144/Quy-hoc-bong-Posco-TJ-Park-trao-10-suat-hoc-bong-cho-sinh-vien-dHQGHN
										.htm"> Quỹ học bổng Posco TJ Park trao 10 suất học bổng cho sinh viên ĐHQGHN
										</a> 
									</td>	
									</tr> 
									<tr style="background-color:#216934">
										<td style="width:35%"> 
											<a href="/ttsk/?C1660/N27118/Le-tong-ket-va-trao-giai-Cuoc-thi-dai-su-Van-hoa-doc-nam-2020.htm"><img src="{{asset('/uploads/home/img/14.jpg')}}" alt="" style=" padding: 3px; height: 60px; width: 100px; padding-bottom: 2px;">
											</a>
										</td>
										<td style="padding-right:2px ">						
											<a style="font-size:13px; color: #fff!important; text-decoration:none; line-height: 18px;padding-bottom:2px" href="/ttsk/?C1660/N27118/Le-tong-ket-va-trao-giai-Cuoc-thi-dai-su-Van-hoa-doc-nam-2020.htm"> Lễ tổng kết và trao giải Cuộc thi Đại sứ Văn hoá đọc năm 2020 </a> 
										</td>	
									</tr> 
									<tr style="background-color:#fff;height:1px" "="></tr>

							</tbody></table>
						</div>
					
					</div>
				</div>
			</div>
			
		</div>
		<div class="footer">
			
		</div>
	</div>
	<script>
			var dem = 0;
			function functionMouseOver(){
				const linkLogin = document.querySelector(".login");
				console.log(linkLogin);
				linkLogin.style.color = "#fff";	
				linkLogin.style.backgroundColor = "#007f49";
			}
			function functionMouseOut(){
				const linkLogin = document.querySelector(".login");
				console.log(linkLogin);
				linkLogin.style.color = "#007f49";
				linkLogin.style.backgroundColor = "#fff";
			}
			function my_function(){
				var getElement = document.getElementById("user-logout");
				dem++;
				if(dem % 2 === 1){
					getElement.style.display = "block";
				}
				if(dem % 2 === 0){
					getElement.style.display = "none";
				}
			}
	</script>
</body>
</html>