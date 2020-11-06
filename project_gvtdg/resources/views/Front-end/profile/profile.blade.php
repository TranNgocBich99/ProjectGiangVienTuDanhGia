<!DOCTYPE html>
</html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}" defer></script>

		<!-- Fonts -->
		<link rel="dns-prefetch" href="//fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

		<!-- Styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
     
	</head>
	<style>
		.input_data{
			width: 33%;
		}
		.label_data{
			float:left;
		}
		.submit-row{
			padding: 12px 14px;
			margin: 0 0 20px;
			background: #f8f8f8;
			border: 1px solid #eee;
			border-radius: 4px;
			text-align: right;
			overflow: hidden;
		}
		.btn_cancel,.btn_save{
			background: #79aec8;
			padding: 10px 15px;
			border: none;
			border-radius: 4px;
			color: #fff;
			cursor: pointer;
		}
		.btn_save{
			float: right;
			border: none;
			font-weight: 400;
			background: #417690;
			margin: 0 0 0 8px;
			text-transform: uppercase;
		}
	</style>
	<body>
		<div class="container">
			<div class="row justify-content-center" style = "justify-content: center!important;display: flex;
					flex-wrap: wrap;">
				<div class="col-md-8" style = "position: relative;
					display: flex;
					flex-direction: column;
					min-width: 0;
					word-wrap: break-word;
					background-color: #fff;
					background-clip: border-box;
					padding: 24px;
					margin-top: 4px;
				  ">
					@include('Front-end.block.error')
					@include('Front-end.thongbao')
					<div class = "card">
						<div class="card-header" style = "font-weight: bold;font-size: 16px;color: #eeb10a;">{{ __('Sửa thông tin cá nhân') }}</div>
						<div class = "card-body">
							<form id = "validate_form" action="{{route('postProfile',$user->us_id)}}" method="POST" enctype="multipart/form-data" >
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
							
								<div class="form-group" style="width: 100%;float: left;">
									<label class="col-lg-3 label_data">Ảnh đại diện</label>
									<div class="input_data" style="float: left;width: 70%;">
										<img id = "avar" name = "avar"  width="100px" height="30%" alt="avatar" src="{{asset($user->us_avatar)}}" accept="image/*"/>
										<input style = "margin-top: 10px;" type = "file"  name = "avatar" value="{{asset($user->us_avatar)}}"  onchange="readURL(this);"></input>
									</div>
									<script>
										function readURL(input) {
												if (input.files && input.files[0]) {
													var reader = new FileReader();
													reader.onload = function (e) {
														$('#avar')
															.attr('src', e.target.result)
															.width(150)
															.height(150);	
													};
													reader.readAsDataURL(input.files[0]);
												}
										}
									</script>
								</div>	
								
								<div class="form-group">		
									<label class="col-lg-3 label_data">Tên người dùng</label>
									<input  class = "form-control input_data" id = "name" type = "text" name = "name" autofocus="autofocus"  value="{!! $user->us_name !!}" placeholder = "Tên người dùng"></input>
								</div>				
							
								<div class="form-group">
								
									<label class="col-lg-3 label_data">
										<input id = "changePassword" type = "checkbox" onclick="doimail(this)" name = "changeEmail"></input>
										Đổi email
									</label>
									<input class = "form-control input_data" id = "email" type = "email" name = "email" autofocus="autofocus"  value="{!! $user->email !!}" placeholder = "Email" disabled=""></input>

								</div>	
							
								<div class="form-group">
									<label class="col-lg-3 label_data">
										<input id = "changePassword" type = "checkbox" onclick="changePassWord(this)" name = "changePass"></input>
										Đổi mật khẩu
									</label>
									<input class="form-control input_data" id = "password" type = "password" name = "password" placeholder = "Đổi Mật khẩu"  disabled = ""></input>
								</div>
											
								<div class="form-group">
									<label class="col-lg-3 label_data">Nhập lại mật khẩu</label>
									<input class="form-control input_data" id = "passwordAgain" type = "password" name = "passwordAgain" placeholder = "Nhập lại mật khẩu"  disabled=""></input>
								</div>
								
								<div class="form-group">
									<div class = "my_school">
										<label  class="col-lg-3 label_data">Trường</label>
										<select  class="form-control input_data" name="school" id="school" style="width:300px">
											<option value="-1">Chọn trường</option>
											@foreach($listSchool as $item)
											  <option value="{!! $item->sch_id !!}" @if("$item->sch_id" == "$user->us_id_school") selected @endif >{!! $item->sch_name !!}</option>
											@endforeach
										</select>
									</div>
								</div>	
								
								<div class="form-group">
									<div class="my_science">
										<label  class="col-lg-3 label_data">Khoa</label>
										<select id="science" name="science" class="form-control input_data" style="width:300px">
											<option value="-1">Chọn khoa</option>
											@foreach($listScience as $item)	
												<option value = "{!!$item->sci_id!!}" @if("$item->sci_id" == "$user->us_sci_id") selected @endif>{!!$item->sci_name!!}</option>
											@endforeach
										</select>
									</div>
								</div>	
					
								<div class="submit-row form-group col-lg-12">
									<button type="button" class="btn_cancel" onclick = "cancel_function()">Cancel</button>
									<button type = "submit" id = "submit" type="button" class="btn_save" onclick = "save_function()">Save</button>
								</div>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			function cancel_function(){
					
				window.location.href = "{{URL::route('home')}}";
			
			}
			function changePassWord(object){
				var inputpassword = document.getElementById('password');
				var inputpasswordAgain = document.getElementById('passwordAgain');
				if(object.checked == true){
					inputpassword.disabled = false;
					inputpasswordAgain.disabled = false;
				}
				else{
					inputpassword.disabled = true;
					inputpasswordAgain.disabled = true;
				}
			}
			function doimail(object){
				var emailObject = document.getElementById('email');
				console.log(emailObject);
				if(object.checked == true){
					emailObject.disabled = false;
					emailObject.disabled = false;
				}
				else{
					emailObject.disabled = true;
					emailObject.disabled = true;
				}
			}
			$(document).ready(function(){	
				$("#school").change(function () {
					var sch_id = $("#school option:selected").val();
					console.log(sch_id);
					var url = '{{route("ajax_get_science")}}';
					$.ajax({
						type: 'GET',
						url:url,
						data: {sch_id:sch_id},
						success:function(data){
							$("#science").html(data);
						}
					});
					$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
				});
			})
		</script>
	</body>
</html>