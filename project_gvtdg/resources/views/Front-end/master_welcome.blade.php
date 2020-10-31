<!DOCTYPE html>
<html>
    <head>
<script type="text/javascript">
window.__lc = window.__lc || {};
window.__lc.license = 10825817;
(function() {
  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>
<noscript>
<a href="https://www.livechatinc.com/chat-with/10825817/" rel="nofollow">Chat with us</a>,
powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
</noscript>
<!-- End of LiveChat code -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>XTech</title>
        
        <base href="{!!asset('')!!}">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<!--  Validate -->
		<script type = "text/javascript" src = "{{asset('css/admin/js/ValidateLienHe/validate.js')}}"></script>
		<link type= "text/css" rel="stylesheet" href="{{asset('css/admin/validateStyle/validation.css')}}">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		 <!-- Link Swiper's CSS -->
		<link rel = "stylesheet" href="{{asset('css/FrontEndCss/swiper.min.css')}}">
	  <style>
            html, .container,body {
                font-family: 'Poppins', sans-serif;
                font-weight: 200;
            }
			.container{
				padding:0 !important;
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
        </style>
    </head>
    <body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3&appId=646078125864062&autoLogAppEvents=1"></script>
		<div class="container-fluid	welcome" style="padding: 0;">
				<!-- Show - header -->
<!--

---------------------------------------------- Show header -----------------------------------------------------

-->		
					
				<div class = "container-fluid navi" style = "background-Image: -webkit-linear-gradient(0deg, #56748a 0%, #56748a 100%)!important;">
					<style>
						#logo a{
							float: left;
							display: initial;
							font-size: 32px;
							color: #705ecf;
							text-shadow: 1px 3px 4px rgb(198, 185, 217);
							padding: 0;
							font-weight: 600;
							text-decoration: none;
						}
						.navi{
							position: fixed;
							width: 100%;
							z-index: 99;
							background-color: #fff;
						}
						.header{
							padding: 15px;
							float: left;
							width: 100%;
						}
						.navi{
							box-shadow: 0 4px 5px 0 rgb(136, 162, 177), 0 1px 10px 0 rgb(167, 190, 202), 0 2px 4px -1px rgb(154, 178, 191);
						}
						
						.header .nav_menu ul{
							list-style: none;
							float: left;
							display: inline-block;
							padding: 0;
							margin: 0;
							margin-left: 30px;
						}
						.header .nav_menu ul li,.login_res li{
							float: left;
							display: inline-block;
						}
						.header .nav_menu ul li .tag-menu,.login_res .user-login{
							font-size: 15px;
							letter-spacing: .5px;
							margin: 0 14px;
							font-weight: 400;
							text-decoration:none;
							color: #fff;
							font-weight: bold;
						}
						.header .nav_menu ul li .tag-menu:hover{
							color: #76e2cb;
							border-bottom: 2px solid #76e2cb;
						}
						.header .nav_menu ul li .tag-menu{
							transition:all .2s;
						}
						.login_res .user-login:hover{
							color: #76e2cb;
							border-bottom: 2px solid #76e2cb;
						}
						.login_res .user-login{
							transition:all .2s;
						}
						.login{
							float: right;
							width: 68px;
							height: 43px;
							line-height: 40px;
							text-align: center;
							border: 1px solid #ccc;
							border-radius: 15px;
							color:#fff !important;
							text-decoration:none !important;
						}
						.login:hover{
							color: #76e2cb;
							border-bottom: 2px solid #76e2cb;
						}
						.login{
							transition:all .2s;
						}
						.img-user #user-logout{
							display: block;
							border-radius: 3px;
							position: absolute;
							right: 0px;
							min-width: 273px !important;
							box-shadow: 0 0 60px rgba(14,42,71,0.25);
							text-align: center;
							background-color: rgb(255, 255, 255);
						}
						.img-user .img_user_data{
							float: left;
							width: 100%;
							padding: 15px;
							border-bottom: 1px solid #ccc;
						}
						.img-user .img_user_data img{
							float: left;
							width: 80px;
							height: 80px;
							margin: 0;
							max-width: 100%;
						}
						.img-user .img_user_data .name_user{
							width: 100px;
							display: block;
							margin: 0;
							float: left;
							font-size: 15px;
							margin-left: 21px;
							text-align: left;
							text-overflow: ellipsis;
							white-space: nowrap;
							word-wrap: normal;
						}
						.img-user .user_logout a{
							width: 100%;
							display: block;
							margin: 0;
							float: left;
							text-align: left;
							padding: 0 15px;
							font-size: 17px;
						}
						.user_profile:hover{
							color:#fff !important;
							box-shadow: 0 4px 5px 0 rgb(249, 249, 249), 0 1px 10px 0 rgba(249, 249, 249, 0.58), 0 2px 4px -1px rgb(249, 249, 249);
							background-color:#b5bdc3 !important;
						}
						.user_profile{
							transition:all .2s;
						}
						.user_logout{
							float: left;
							width: 100%;
						}
						.user_logout a:hover{
							background-color:#b1b5b9  !important;
							color:#fff !important;
						}
						.user_logout a{
							transition:all .2s;
						}
						#user-logout::before{
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
						#user-logout{
							position:relative;
							transition:all 5s;
						}
						.user-logout:hover{
							color:#fff;
							
						}
						.user-logout{
							transition:all .2s;
						}
						
						.dropdown-tag{
							line-height: 30px; color: #111417;text-decoration: none;    padding-left: 15px;
							width: 100%;
							height: 30px;
							text-decoration: none !important;
							display: block;"class="dropdown-item active
						}
						.dropdown-tag:hover{
							background:#e6e3e3;
						}
						
						.tag-menu:active{
							color:#ccc;
						}
						.changeStyleColor{
							color: #76e2cb !important;
						}
						.dropdown-content{
							position:absolute;
							width:100%;
							left:0;
							display:none;
						}
						.dropdown:hover .dropdown-content {
							display: block;
						}
						.dropdown, .dropup {
							position: static !important;
						}
								
						.dropdown-product .item-product{
							text-align:left !important;	
						}
						.dropdown-product .item-product h4{
							color: #f0832a;
							font-weight: bold;
							float: left;
							width: 100%;
							text-transform:uppercase;
						}
						.dropdown-product .item-product img{
							cursor: pointer;
						}
						.dropdown-product .item-product img:hover{
							width:110px !important;
						}
						.dropdown-product .item-product img{
							transition:all .2s;
						}
						.dropdown-product .item-product ul{
							list-style: none;
							padding:0;
							margin: 0 !important;
						}
						.dropdown-product .item-product .item-pro-li{
							text-align:left !important;
							padding: 8px 0;
							overflow: hidden;
							cursor: pointer;
							
						}
						
						.dropdown-product .item-product a:hover{
							color:#ccc;
						}
						.dropdown-product .item-product a{
							transition:all .2s;
						}
						.dropdown-product .item-product a{
							line-height: initial !important;
							text-decoration:none !important;
							float: left;
							display: block;
							color: #fff;
						}
						.tag-menu-product{
							position:relative;
						}
						
						.tag-menu-product::after{
							font-size: 1.4em;
							display: none;
							width: 0;
							height: 0;
							content: '';
							pointer-events: none;
							border-right: 10px solid transparent;
							border-bottom: 10px solid #cccccc;
							border-left: 10px solid transparent;
							position: absolute;
							right: 50%;
							top: 230%;
						}
						.dropdown-product{
							float: left;
							width: 100%;
							margin-top: 16px;
							z-index: 1000;
							background-color: #56748a;
							padding: 15px 15px;
							display:block;
							border-top: 3px solid #ccc;
						}
						.new_tag_drop .dropdown-content:before{
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
						.new_tag_drop .dropdown-content{
							display:none;
							width:150px;
							left: -82%;
							background-color:#fff;
							border-radius: 4px;
							box-shadow: 0 4px 5px 0 rgb(138, 144, 147), 0 1px 10px 0 rgb(128, 134, 137), 0 2px 4px -1px rgb(154, 178, 191);
							padding: 4px 0;
							
						}
						
					</style>
					<!--
					
					---------------------------------------------------------- Visible lg , md ---------------------------------------------------
					
					-->
					<div class = "header hidden-xs hidden-sm" style = "line-height: 48px;padding:15px 0 !important">
						<div id = "logo" style = "float: left;" title = "CÔNG TY TNHH GIẢI PHÁP CÔNG NGHỆ KẾT NỐI THÔNG MINH">
							<a href = "{{route('trangchu')}}" style = "color: #ccaff5 !important;">
								<i class="fab fa-linode"></i>
								XTech
							</a>
						</div>
						<div class = "nav_menu">
							<!--
							<ul class = "menu">
							
								<li><a class = "tag-menu active" href = "{{route('trangchu')}}" style = "color: #76e2cb; !important" title = "Trang chủ" onclick = "click_tag(this,'tag-menu')" onmouseover = "changeColor(this,'tag-menu')" onmouseout = "resetClor('tag-menu')">Trang chủ</a></li>
								<li><a class = "tag-menu" href = "/dichvu" title = "Dịch vụ" onmouseover = "changeColor(this,'tag-menu') " onmouseout = "resetClor('tag-menu')" onclick = "click_tag(this,'tag-menu')">Dịch vụ</a></li>
								<li><a class = "tag-menu" href = "/sanpham" title = "Sản phẩm" onmouseover = "changeColor(this,'tag-menu')" onmouseout = "resetClor('tag-menu')" onclick = "click_tag(this,'tag-menu')">Sản phẩm</a></li>
								<li><a class = "tag-menu" href = "#customers" title = "Khách hàng" onmouseover = "changeColor(this,'tag-menu')" onmouseout = "resetClor('tag-menu')" onclick = "click_tag(this,'tag-menu')">Khách hàng</a></li>
								<li>
									<div class="dropdown">
										<a class = "tag-menu tag_new" href = "http://xtech.com.vn/tintuc" title = "Tin tức" class = "dropdown-toggle" onmouseout = "resetClor('tag-menu')" onmouseover = "changeColor(this,'tag-menu')" data-toggle="dropdown">Tin tức
											<i class="fa fa-caret-down"></i>
										</a>
										<div class="dropdown-menu">
										  <a class = "dropdown-tag" style = "" href="http://xtech.com.vn/tintuc/noibo">Nội bộ</a>
										  <a class = "dropdown-tag" href="http://xtech.com.vn/tintuc/congnghe">Công nghệ</a>
										  <a class = "dropdown-tag" href="http://xtech.com.vn/tintuc/lienquan">Liên quan</a>
										  <a class = "dropdown-tag" href="http://xtech.com.vn/tintuc/khac">Khác</a>
										</div>
									</div>
								</li>
								<li><a class = "tag-menu" href = "{{route('vechungtoi')}}" title = "Về chúng tôi" onclick = "click_tag(this,'tag-menu')" onmouseout = "resetClor('tag-menu')" onmouseover = "changeColor(this,'tag-menu')">Về chúng tôi</a></li>
								<li><a class = "tag-menu" href = "{{route('lienhe')}}" title = "Liên hệ" onmouseover = "changeColor(this,'tag-menu')" onclick = "click_tag(this,'tag-menu')" onmouseout = "resetClor('tag-menu')">Liên hệ</a></li>
								
							</ul>
							-->
							<ul class = "menu">
							
								<li><a class = "tag-menu active" href = "{{route('trangchu')}}" style = "" title = "Trang chủ" onclick = "click_tag(this,'tag-menu')" >Trang chủ</a></li>
								<li><a class = "tag-menu" href = "{{route('dichvu.html')}}" title = "Dịch vụ"  onclick = "click_tag(this,'tag-menu')">Dịch vụ</a></li>
								<!--<li><a class = "tag-menu product_hover" href = "/sanpham" title = "Sản phẩm" onclick = "click_tag(this,'tag-menu')">Sản phẩm</a></li>-->
								<!--<li class = "li-menu-pro" style = "cursor:pointer"><a onmouseover = "display_drop_pro(this)" class = "tag-menu tag-menu-product" href = "#" title = "Sản phẩm" onclick = "click_tag(this,'tag-menu')"  onmouseout = "reset(this)">Sản phẩm</a></li>-->
								<li>
									<div class="dropdown">
										<a class = "tag-menu tag-menu-product" href = "{{route('chinhphuvaphichinhphu.html')}}" title = "Sản phẩm" onclick = "click_tag(this,'tag-menu')">Sản phẩm
											<i class="fa fa-caret-down"></i>
										</a>
										<div class="dropdown-content">
											<div class = "dropdown-product">
												<div class = "item-product col-md-3">
													<div class = "content">
														<a href = "{{route('chinhphuvaphichinhphu.html')}}"><img title = "Chính phủ & phi chính phủ" src =  "/uploads/customers/20190520041346.png" style = "width:100px"/></a>
														<h4>Chính phủ & phi chính phủ</h4>
														<ul style = "list-style:none">	
															@foreach($listProductsOfGove as $itemCom)
																<li title = "{!!$itemCom->pr_content!!}" class = "item-pro-li"><a href ="{!! asset('sanpham/'.$itemCom->pr_id.''.'.html'   ) !!}">{!!$itemCom->pr_content!!}</a></li>
															@endforeach
														</ul>
													</div>
												</div>
												
												<div class = "item-product col-md-3">
													<div class = "content">
														<a href = "{{route('quocte.html')}}"><img title = "Quốc tế" src =  "/uploads/customers/20190520041433.png" style = "width:100px"/></a>
														<h4>Quốc tế</h4>
														<ul>	
															@foreach($listProductsOfNati as $itemCom)
																<li title = "{!!$itemCom->pr_content!!}" class = "item-pro-li"><a href = "{!! asset('sanpham/'.$itemCom->pr_id.''.'.html'   ) !!}">{!!$itemCom->pr_content!!}</a></li>
															@endforeach
														</ul>
													</div>
												</div>
												
												<div class = "item-product col-md-3">
													<div class = "content">
														<a href = "{{route('congdong.html')}}"><img title = "Cộng đồng" src =  "/uploads/customers/20190520042124.png" style = "width:100px"/></a>
														<h4>Cộng đồng</h4>
														<ul>	
															@foreach($listProductsOfCom as $itemCom)
																<li title = "{!!$itemCom->pr_content!!}" class = "item-pro-li"><a href = "{!! asset('sanpham/'.$itemCom->pr_id.''.'.html'   ) !!}">{!!$itemCom->pr_content!!}</a></li>
															@endforeach
														</ul>
													</div>
												</div>
												
												<div class = "item-product col-md-3">
													<div class = "content">
														<a href = "{{route('giaoduc.html')}}"><img title = "Giáo dục" src =  "/uploads/customers/20190520041413.png" style = "width:100px"/></a>
														<h4>Giáo dục</h4>
														<ul>	
															@foreach($listProductsOfEduca as $itemCom)
																<li title = "{!!$itemCom->pr_content!!}" class = "item-pro-li"><a href = "{!! asset('sanpham/'.$itemCom->pr_id.''.'.html'   ) !!}">{!!$itemCom->pr_content!!}</a></li>
															@endforeach
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li><a class = "tag-menu" href = "#customers" title = "Khách hàng" onclick = "click_tag(this,'tag-menu')">Khách hàng</a></li>
								<li class = "new_tag_drop">
									<div class="dropdown" style = "position:relative !important">	
										<a class = "tag-menu tag_new" href = "#" title = "Tin tức">Tin tức
											<i class="fa fa-caret-down"></i>	
										</a>
										<div class="dropdown-content">
										  <a title = "Nội bộ" class = "dropdown-tag" style = "" href="{{route('noibo.html')}}">Nội bộ</a>
										  <a title = "Công nghệ" class = "dropdown-tag" href="{{route('congnghe.html')}}">Công nghệ</a>
										  <a title = "Liên quan" class = "dropdown-tag" href="{{route('lienquan.html')}}">Liên quan</a>
										  <a title = "Khác" class = "dropdown-tag" href="{{route('khac.html')}}">Khác</a>
										</div>
									</div>
								
								</li>
								<?php 
								//	echo $t = URL::route('vechungtoi');
									$url = route('vechungtoi');
								//	echo $url;
								//	exit();
								?> 
								<li><a class = "tag-menu" href = "{{route('vechungtoi')}}" title = "Về chúng tôi" @if(route('vechungtoi') == $url) onclick = "click_tag(this,'tag-menu')" @endif>Về chúng tôi</a></li>
								<li><a class = "tag-menu" href = "{{route('lienhe')}}" title = "Liên hệ" onclick = "click_tag(this,'tag-menu')" >Liên hệ</a></li>
								
							</ul>
							
						</div>
						
						<div class = "login_res">
							<ul style  = "list-style: none;margin: 0; padding: 0;float: right;">
								<!--<li>
									<a href = "{{route('getDangki')}}">Dangki</a>
								</li>-->
								@if (Route::has('login'))
									@auth
										<div class = "img-user" style = "position:relative">
											<img style = "width:50px;cursor: pointer;" class = "img-circle img_click" src = "{{Auth::user()->user_avartar}}" onclick = "my_function()"/>
										
											<li id = "user-logout" style = "display:none;position:absolute;right: 0px;width: 100px;width: 100px;text-align: center;background-color: #fff">
												<!-- Right Side Of Navbar -->
												<ul class="" style = "float: right;padding: 0;width:100%">
													<!-- Authentication Links -->
													@guest
															<li class="" style = "width:100%">
																<a class="user-login" href="{{ route('login') }}">{{ __('Login') }}</a>
															</li>
														<!--@if (Route::has('register'))
															<li class="">
																<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
															</li>
														@endif
														-->
													@else
														<li class="name_logout" style = "width:100%">
													
															<div class = "img_user_data">
																<a title = "Admin" href = "#" style = "display:block;margin:0" ><img class = "img-circle" src = "{{ Auth::user()->user_avartar}}"/></a>
																<div class = "user_data">
																	<span class = "name_user" style = "display: block">
																		
																		@if(Auth::user()->user_type == 1)   
																			<p title = "{{ Auth::user()->name }}">Admin: {{ Auth::user()->name }}</p>
																			
																	
																	</span>
																	<a href = "{{route('admin.customer.getList')}}" style = "font-size: .8em; padding: 0.50em .75em;background-color: #E3E9ED;float: left;display: block;margin-left: 21px;font-weight: bold;font-size: 13px;color: #8e7f7f;

" href = "#" class = "btn btn-gray btn-small user_profile">Trang quản trị »</a>
																		@else
																				<p title = "{{ Auth::user()->name }}">User: {{ Auth::user()->name }}</p>
																			
																		@endif
																</div>
															</div>

															<div class="user_logout">
																<a style = "width: 50%;display: block;margin: 0;color: #8e7f7f !important;" class="user-logout" href="{{ route('logout') }}"
																   onclick="event.preventDefault();
																				 document.getElementById('logout-form').submit();">
																	{{ __('Logout') }}
																</a>
																<a style = "width: 50%;display: block;margin: 0;color: #8e7f7f !important;" class="user-logout" href="{{route('getProfile',Auth::user()->id)}}">
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
										<!--	<li><a  title = "Resgister" style = "float:right" href="{{ route('register') }}">Resgister</a></li> -->
										@if (Route::has('register'))
										
											<!--<li>
												<a style = "width: 100%;display: block;margin: 0;color:#31ce1fb3 !important" class="" href="{{ route('logout') }}"
																   onclick="event.preventDefault();
																				 document.getElementById('logout-form').submit();">
																	{{ __('Logout') }}
												</a>
											</li>
											-->
											<li><a  class = "login" title = "Login" style = "float:right" href="{{ route('login') }}">Login</a></li>
										
										@endif
									@endauth
								@endif
								
							</ul>
							
						</div>
						
						<div class="form-group" style = "float: right;max-width:15% !important;margin-top:7px;margin-bottom:0px !important;margin-right: 7px">
							<input class="form-control" type = "text" name = "name" placeholder = "Search...">
							</input>
							<a href = "#" ><i style = "position: absolute;font-size: 16px;right: 6px; top: 9px; color: #ccc;"class="fas fa-search"></i></a>
						</div>
						
					</div>
					
					<!--
					
					---------------------------------------------------------- Visible xs , sm ---------------------------------------------------
					
					-->
					<div class = "visible-xs visible-sm col-xs-12 header header_xs" style = "line-height: 48px;padding-left: 0;padding-right: 0;">
						<style>
								.header_xs .header-visible-menu .menu-tag-xs{
									text-decoration:none;
									color:#fff;
									font-weight: bold;
									display:block;
									width:100%;
								}
								.header_xs .my-header #header-menu span{
									display: block;
									padding-right: 20px;
									border: 1px solid #ccc;
									padding-left: 20px;
									height: 100%;
									border-radius: 4px;
									cursor:pointer;
								}
								.header_xs .my-header #header-menu span:hover{
									background-color:#05b993;
									border:none;
									color:#fff;
								}
								.header_xs .my-header #header-menu span{
									transition:all .2s;
								}
								.header_xs .header-visible-menu{
									display : none;
								}
								.drop_news li a{
									color: #e58d0d !important; 
									border-bottom: 1px solid #ccc;
								}
								
								.drop_pro li a{
									color: #e58d0d !important; 
									border-bottom: 1px solid #ccc;
								}
								
								
						</style>
						<div class = "my-header" style = "float: left;width: 100%;">
							<div id = "logo" style = "float: left;" title = "CÔNG TY TNHH GIẢI PHÁP CÔNG NGHỆ KẾT NỐI THÔNG MINH">
								<a href = "{{route('trangchu')}}" style = "color: #ccaff5 !important;">
									<i class="fab fa-linode"></i>
									XTech
								</a>
							</div>
							<div id = "header-menu" style = "float:right;max-width: 100%;">
								<!--<span class = "span-menu" onclick = "click_menu_function(this)" onmouseover="change_over(this)" onmouseout="normalStyle(this)">
									Menu
								</span>-->
								
								<span class = "span-menu" onclick = "click_menu_function(this)" style = "background-color:#fff;color:#000">
									Menu
								</span>
							</div>
						</div>
						<div class = "header-visible-menu" style = "float: left;width: 100%;text-align: center;padding: 15px 0;">
							<div class="form-group" style = "    position: relative;
    margin: 0;">
									<input class="form-control" type = "text" name = "name" placeholder = "Search...">
									</input>
									<a href = "#" ><i style = "position: absolute;
    top: 30%;
    color: #ccc;
    right: 9px;" class="fas fa-search"></i></a>
							</div>
							<ul style = "list-style: none;padding: 0;margin: 0;">
								<li><a class = "menu-tag-xs" href = "{{route('trangchu')}}" title = "Home"  style = "">Trang chủ</a></li>
								
								<li ><a class = "menu-tag-xs" href = "/dichvu" title = "Dịch vụ" >Dịch vụ</a></li>
								
								<li style = "position: relative;">
									<span class = "menu-tag-xs my_pro" href = "#" title = "Sản phẩm" onclick = "click_drop_xs(this,'.drop_pro')">Sản phẩm
										<i class="fas fa-angle-right" style = "position: absolute;right: 0;font-size: 21px;top: 29%;"></i>
									</span>
								</li>
								
								<div class="drop_pro" style = "display:none;border: 1px solid rgb(204, 204, 204);">
								  <li style = "position: relative;">
									  <span class = "menu-tag-xs" title = "Sản phẩm" style = "color: #76e2cb !important;border-bottom: 1px solid #ccc;" onclick = "click_all_down('.my_pro','.drop_pro')">Sản phẩm
										<i class="fas fa-angle-down" style = "position: absolute;right: 0;font-size: 21px;top: 29%;"></i>
									  </span>
								  </li>
								  <li><a title = "Chính phủ & phi chính phủ" class = "menu-tag-xs" style = "" href="{{route('chinhphuvaphichinhphu.html')}}">Chính phủ & phi chính phủ</a></li>
								  <li><a title = "Quốc tế" class = "menu-tag-xs" href="{{route('quocte.html')}}">Quốc tế</a></li>
								  <li><a title = "Giáo dục" class = "menu-tag-xs" href="{{route('giaoduc.html')}}">Giáo dục</a></li>
								  <li><a title = "Cộng đồng" style = "border-bottom:none !important" class = "menu-tag-xs" href="{{route('congdong.html')}}">Cộng đồng</a></li>
								</div>
								
							
								<li><a class = "menu-tag-xs" href = "#customers" title = "Khách hàng" >Khách hàng</a></li>
						
								<li  style = "position: relative;" >
									<span class = "menu-tag-xs my_new" title = "Tin tức" onclick = "click_drop_xs(this,'.drop_news')" style = "cursor:pointer">Tin tức
										<i class="fas fa-angle-right" style = "position: absolute;right: 0;font-size: 21px;top: 29%;"></i>
									</span>
								</li>
								<div class="drop_news" style = "display:none;border: 1px solid rgb(204, 204, 204);">
								  <li style = "position: relative;">
								      <span class = "menu-tag-xs" title = "Tin tức" style = "color: #76e2cb !important;border-bottom: 1px solid #ccc;" onclick = "click_all_down('.my_new','.drop_news')">Tin tức
										<i class="fas fa-angle-down" style = "position: absolute;right: 0;font-size: 21px;top: 29%;"></i>
									  </span>
								  </li>
								  <li><a title = "Nội bộ" class = "menu-tag-xs" style = "" href="{{route('noibo.html')}}">Nội bộ</a></li>
								  <li><a title = "Công nghệ" class = "menu-tag-xs" href="{{route('congnghe.html')}}">Công nghệ</a></li>
								  <li><a title = "Liên quan" class = "menu-tag-xs" href="{{route('lienquan.html')}}">Liên quan</a></li>
								  <li><a title = "Khác" style = "border-bottom:none !important" class = "menu-tag-xs" href="{{route('khac.html')}}">Khác</a></li>
								</div>
								
									<li><a class = "menu-tag-xs" href = "{{route('vechungtoi')}}" title = "Về chúng tôi" >Về chúng tôi</a></li>
								
									<li><a class = "menu-tag-xs" href = "{{route('lienhe')}}" title = "Liên hệ" >Liên hệ</a></li>
									<script>
										
									</script>
								
								@if (Route::has('login'))
									@auth
											<li>
												@if(Auth::user()->user_type == 1)
													<a class = "menu-tag-xs" href = "{{route('admin.customer.getList')}}" style = "width: 100%;
    font-weight: bold;
    display: block;
    height: 100%;
    color: #fff;    color: #d9ae17;" href = "#" class = "btn btn-gray btn-small user_profile">Trang quản trị »</a>
												<li>
													<a class = "menu-tag-xs" style = "width: 100%;display: block;margin: 0;color: #d9ae17 !important;" class="user-logout" href="{{route('getProfile',Auth::user()->id)}}">
																	{{ __('Sửa thông tin cá nhân') }}
													</a>
												</li>
												@else	
												<li>
													<a class = "menu-tag-xs" style = "width: 100%;display: block;margin: 0;color: #d9ae17 !important;" class="user-logout" href="{{route('getProfile',Auth::user()->id)}}">
																	{{ __('Sửa thông tin cá nhân') }}
													</a>
												</li>
												@endif
											</li>
											<li>
												
												<a style = "width: 100%;display: block;margin: 0;color: #d9ae17; !important;font-weight: bold;" class="" href="{{ route('logout') }}"
																   onclick="event.preventDefault();
																				 document.getElementById('logout-form').submit();">
																	{{ __('Đăng xuất') }}
												</a>
												

											</li>
									@else
										@if (Route::has('register'))
										
											<li><a style = "color: #d9ae17; !important;font-weight: bold;" title = "Đăng nhập"  href="{{ route('login') }}"><span>Đăng nhập</span></a></li>
										
										@endif
									@endauth
								@endif
							</ul>
						</div>
						<script>
							var count = 0;
							var dem = 0;
							function click_menu_function(object_span_menu){
								var visible_menu = document.querySelector(".header-visible-menu");
								count++;
								if(count % 2 === 1){
									visible_menu.style.display = "block";
									object_span_menu.style.background = "#05b993";
									object_span_menu.style.border = "1px solid #ccc";
									object_span_menu.style.color = "#fff";
									object_span_menu.style.border = "none";
									return;
								}
								if(count % 2 === 0){
									visible_menu.style.display = "none";
									object_span_menu.style.background = "#fff";
									object_span_menu.style.color = "black";
									return;
								}
							};
						
							/*var menu_xs = document.querySelector(".header-visible-menu");
							if(menu_xs != null){
								window.onclick = function(e) {
								  if (!e.target.matches('.span-menu')) {
									  menu_xs.style.display = "none";
									  console.log(menu_xs);
									  var spanMenuObject = document.querySelector(".span-menu");
									  spanMenuObject.style.background = "#fff";
									  spanMenuObject.style.color = "black";
									  count = 0;
									}
								}
							}
							*/
							
							
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
							
							var myDropdown = document.getElementById("user-logout");
							
							if(myDropdown != null){
								window.onclick = function(e) {
								  if (!e.target.matches('.img_click')) {
									  myDropdown.style.display = "none";
									  dem = 0;
									}
								}
							}
							var loaded = document.addEventListener('loaded',function(){
								click_tag(objectClick,selector);
							})
							function click_tag(objectClick,selector){
								console.log(objectClick);
								var nodeList = document.getElementsByClassName(selector);
								console.log(nodeList);
								for(var i = 0; i < nodeList.length; i++){
									nodeList[i].classList.remove('changeStyleColor');
								}
								objectClick.classList.add('changeStyleColor');
								//objectClick.style.color = "#76e2cb";
							}
						
						/*	function changeColor(objectSelected,selector){
						
									var nodeList = document.getElementsByClassName(selector);
									for(var i = 0; i < nodeList.length; i++){
										nodeList[i].style.color = "#fff";
									}
									objectSelected.style.color = "#76e2cb";
							
							}
							function resetClor(selector){
								
								var elementActive = document.querySelector(".active");
								//var elementActiveXs = document.querySelector(".active_xs");
								console.log(elementActive);
								var nodeList = document.getElementsByClassName(selector);
								for(var i = 0; i < nodeList.length; i++){
									nodeList[i].style.color = "#fff";
								}
								elementActive.style.color = "#76e2cb";
							}
							//	function change_over(object){
						/*		object.style.border = "none";
								object.style.background = "#05b993";
							};
							function normalStyle(object){
								object.style.border = "1px solid #ccc";
								object.style.background = "#fff";
							};
							*/
							
							function click_drop_xs(obj,selector){
								var getObj = document.querySelector(selector);
								
								obj.style.display = "none";
								getObj.style.display = "block";
							}
							function click_all_down(selector,drop){
								var getObj = document.querySelector(selector);
								var getObjDrop = document.querySelector(drop);
								getObjDrop.style.display = "none";
								getObj.style.display = "block";
							}
						</script>
					</div>
				</div>
			
<!--

-------------------------------------------------------- Page Content -------------------------------------------------------------

-->
				<div style= "margin-top: 80px">
					@yield('content')
				</div>
				
				
<!--

---------------------------------------------- Show footer -----------------------------------------------------

-->			
		<div class = "show-footer">
			<style>
				.show-footer{
					float: left;
					width: 100%;
					margin: 0;
					background-Image: -webkit-linear-gradient(0deg, #287bc6 0%, #b0e9f9 100%);
					padding-top: 30px;
					padding-bottom:30px;
				}
				.show-footer .footer-content{
					float: left;
					text-align: center;
					line-height: 70px;
					width: 100%;
				}	
				.show-footer .footer-content h3{
					color: #fff;
					font-weight: bold;
					font-size: 20px;
				}
				.footer-content{
					float: left;
					width: 100%;
				}
				.footer-content .item-content span{
					display:block;
					float: left;
				}
				.footer-content .item-content p{
					float: left;
					display: block;
					max-width: 800px;
					margin: 0 auto;
					font-size: 15px;
					letter-spacing: 1px;
					color: #fff;
				}
				.footer-content h3{
					position:relative;
					
				}
				.footer-content h3::after{
					content: "";
					position: absolute;
					background-color: #fff;
					height: 2px;
					bottom: -16px;
					right: 0;
					left: 0;
					width: 9%;
					opacity: .5;
				}
				.footer-content .item-content{
					line-height: 40px;
					float: left;
					width: 100%;
					height: 40px;
					margin-bottom: 12px;
				}
				.footer-content .item-content span{
					display: block;
					padding: 8px;
					float: left;
					border-radius: 50%;
					background-color: #fff;
					font-size: 16px;  
					margin-right: 12px;
				}
				.footer-content .item-content p {
					float: left;
					display: block;
					max-width: 800px;
					margin: 0 auto;
					font-size: 15px;
					letter-spacing: 1px;
					color: #fff;
				}
				.footer-menu{
					color: #fff;
				}
				.footer-menu .menu{
					font-weight: bold;
					font-size: 20px;
					position:relative;
				}
				.footer-menu .menu::after{
					content: "";
					position: absolute;
					background-color: #fff;
					height: 2px;
					bottom: -16px;
					right: 0;
					left: 0;
					width: 9%;
					opacity: .5;
				}
				.footer-menu ul{
					padding: 0 0;
					margin: 0;
					list-style: none;
					color: #fff;
				}
				.footer-menu ul li{
					padding: 4px 0;
				}
				.footer-menu a{
					font-size: 15px;
					letter-spacing: 1px;
					color: #fff;
					text-decoration: none !important;
				}
				.footer-link h3{
					color: #fff;
					font-weight: bold;
					font-size: 20px;
					position:relative;
				}
				.footer-link h3::after{
					content: "";
					position: absolute;
					background-color: #fff;
					height: 2px;
					bottom: -16px;
					right: 0;
					left: 0;
					width: 9%;
					opacity: .5;
				}
				.footer-link img{
					width: 36px;
				}
			</style>
				<div class = "my-footer hidden-xs hidden-sm">
					<div class = "col-md-6">
						<div class = "footer-content">
							<h3 style = "text-align: left;">CÔNG TY TNHH GIẢI PHÁP CÔNG NGHỆ KẾT NỐI THÔNG MINH</h3>
							<div class = "item-content" style = "margin-top: 14px !important;">
								<span class = "glyphicon glyphicon-map-marker"></span>
								<p style="width: 533px; line-height: 25px;margin-top: 5px;">Address: Số 6,ngách 73/1/2,đường Yên Xá,xã Tân Triều,Thanh Trì,Hà Nội.</p>
							</div>
							<div class = "item-content">
								<span class = "glyphicon glyphicon-earphone"></span>
								<p>Hotline: 0247.305.2688</p>
								
							</div>
							<div class = "item-content">
								<span class = "glyphicon glyphicon-envelope"></span>
								<p>Email: dinhthu.xTech@gmail.com</p>
								
							</div>
						</div>
					</div>
					<div class = "col-md-3">
						<div class = "footer-menu">
							<h3 class = "menu">MENU</h3>
							<ul class = "footer-list">
								<li style = "padding: 4px 0;padding-top: 14px !important;"><a title = "Trang chủ" href = "{{route('trangchu')}}">Trang chủ</a></li>
								<li><a title = "Dịch vụ"  href = "{{route('dichvu.html')}}">Dịch vụ</a></li>
								<li><a title = "Sản phẩm"  href = "/sanpham/chinhphuvaphichinhphu">Sản phẩm</a></li>
								<li><a title = "Khách hàng" href = "#customers">Khách hàng</a></li>
								<li><a title = "Tin tức"  href = "/tintuc">Tin tức</a></li>
								<li><a title = "Về chúng tôi"  href = "{{route('vechungtoi')}}">Về chúng tôi</a></li>
								<li><a title = "Liên hệ"  href = "{{route('lienhe')}}">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class = "col-md-3">
						<div class = "footer-link">
							<h3>FOLLOW US</h3>
							<div class = "my-link" style = "padding-top: 20px;">
								<a title = "Facebook" href = "#"><img src = "/uploads/customers/20190506082240.png"/></a>
								<a title = "Git-hub" href = "#"><img src = "/uploads/customers/20190505122802.png"/></a>
								<a title = "Linked-In" href = "#"><img src = "/uploads/customers/20190506082420.png"/></a>
								<a title = "Twitter" href = "#"><img src = "/uploads/customers/20190506082325.png"/></a>
							</div>
						</div>
						<div style = "padding: 15px 0; line-height: 14px; font-size: 15px;">
							<i style = "margin-right: 10px;float:left" class="far fa-copyright"></i>
							<p>2019 Xtech Copyright.</p>
						</div>
					</div>
				</div>
				<div class = "visible-xs visible-sm footer-visible-xs">
					<style>
						.footer-visible-xs{
							min-height:400px;
						}
						.footer-visible-xs .footer-xs-title{
							text-align:center;
							color:#fff;
						}
						.footer-visible-xs .footer-xs-title::after{
							content: "";
							position: absolute;
							background-color: #fff;
							height: 2px;
							bottom: -16px;
							right: 0;
							left: 0;
							width: 100%;
							opacity: .5;
							
						}
						.footer-visible-xs .footer-xs-title h3{
							font-size: 16px;
						}
						.footer-visible-xs .item-content-xs p{
							color:#fff;
							margin: 0 0 10px;
						}
						.footer-visible-xs .item-content-xs span{
							display: block;
							padding: 8px;
							float: left;
							border-radius: 50%;
							background-color: #fff;
							font-size: 16px;
							margin-right: 12px;
						}
						.footer-visible-xs .content-text{
							float: left;
							position:relative;
						}
						.footer-visible-xs .content-text::after{
							content: "";
							position: absolute;
							background-color: #fff;
							height: 2px;
							bottom: -16px;
							right: 0;
							left: 0;
							width: 100%;
							opacity: .5;
						}
						.footer-visible-xs .link-footer-vs{
							position:relative;
						}
						.footer-visible-xs .link-footer-vs::after{
							content: "";
							position: absolute;
							background-color: #fff;
							height: 2px;
							bottom: -16px;
							right: 0;
							left: 0;
							width: 100%;
							opacity: .5;
						}
						.footer-visible-xs .menu-footer-xs{
							float: left;
							width: 100%;
							text-align: center;
							color: #fff;
							margin-top: 30px;
						}
						.footer-visible-xs .menu-footer-xs ul{
							list-style: none;
							margin: 0;
							padding: 0;
							text-align: center;
						}
						.footer-visible-xs .menu-footer-xs a{
							color: #fff;
							text-decoration: none !important;
						}
					</style>
					<div class = "col-xs-12 col-sm-12 footer-xs-title">
						<h3>CÔNG TY TNHH GIẢI PHÁP CÔNG NGHỆ KẾT NỐI THÔNG MINH</h3>
					</div>
					<div class = "content-text">
						<div class = "item-content-xs col-xs-12 col-sm-12" style = "margin-top: 30px !important;">
							<span class = "glyphicon glyphicon-map-marker"></span>
							<p>Address: Số 6,ngách 73/1/2,đường Yên Xá,xã Tân Triều,Thanh Trì,Hà Nội.</p>
						</div>
						<div class = "item-content-xs col-xs-12 col-sm-12" style = "height: 43px;">
							<span class = "glyphicon glyphicon-earphone"></span>
							<p>Hotline: 0247.305.2688</p>
						</div>
						<div class = "item-content-xs col-xs-12 col-sm-12">
							<span class = "glyphicon glyphicon-envelope"></span>
							<p>Email: dinhthu.XTech@gmail.com</p>				
						</div>
					</div>
					<div class = "link-footer-vs" style = "float: left;width: 100%;text-align: center;">
						<div class = "footer-link-vs col-xs-12 col-sm-12" style = " margin-top: 16px;">
							<h3 style = "font-size: 16px;color: #fff;">FOLLOW US</h3>
							<div class = "my-link-vs">
								<a title = "Facebook" href = "#"><img style = "width: 36px;" src = "/uploads/customers/20190506082240.png"/></a>
								<a title = "Git-hub" href = "#"><img style = "width: 36px;" src = "/uploads/customers/20190505122802.png"/></a>
								<a title = "Linked-In" href = "#"><img style = "width: 36px;" src = "/uploads/customers/20190506082420.png"/></a>
								<a title = "Twitter" href = "#"><img style = "width: 36px;" src = "/uploads/customers/20190506082325.png"/></a>
							</div>
						</div>
						
					</div>
					<div class = "menu-footer-xs" style = "float:left">
							<h3 class = "menu" style = "margin: 0;">MENU</h3>
							<ul class = "footer-list">
								<li style = "padding: 4px 0;padding-top: 14px !important;"><a title = "Trang chủ" href = "{{route('trangchu')}}">Trang chủ</a></li>
								<li><a title = "Dịch vụ"  href = "{{route('dichvu.html')}}">Dịch vụ</a></li>
								<li><a title = "Sản phẩm"  href = "{{route('chinhphuvaphichinhphu.html')}}">Sản phẩm</a></li>
								<li><a title = "Khách hàng" href = "#customers">Khách hàng</a></li>
								<li><a title = "Tin tức"  href = "{{route('tintuc.html')}}">Tin tức</a></li>
								<li><a title = "Về chúng tôi"  href = "{{route('vechungtoi')}}">Về chúng tôi</a></li>
								<li><a title = "Liên hệ"  href = "{{route('lienhe')}}">Liên hệ</a></li>					
							</ul>
					</div>
					<div class = "col-xs-12 col-sm-12" style = "padding: 15px 14px;line-height: 14px;font-size: 15px; margin: 0;">
							<p style = "text-align: center">
								<i class="far fa-copyright"></i>
								2019 XTech Copyright.
							</p>
					</div>
				</div>
		</div>			
				
<!-- End - footer-->
	
		</div>
		
    </body>
	<script>
		/* global validation */
		var loaded = document.addEventListener('DOMContentLoaded',function(){
			
			validation.init([
				{
					selector:'#name',
					name:'name',
					type:'text',
					min:1,
					max:255,
				},
				{
					selector:'#phone',
					name:'Phone-Number',
					type:'number',
					min:1,
					max:12,
				},
				{
					selector:'#email',
					name:'email',
					type:'email',
					min:1,
					max:255,
				},
			]);
		});
		function save_function(){
				if(!validation.noError()){
					return;
				}
		};
			
	</script>
</html>
