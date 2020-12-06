@extends('layouts.app')

@section('content')
		<div class="container">
        <div class="col-sm-12" style="text-align: center">
        <img src="{{asset('/uploads/home/img/logo.png')}}" alt="" >
    </div>
			<div class="row justify-content-center" style = "justify-content: center!important;display: flex;
    flex-wrap: wrap;">
				<div class="col-md-8" style = "position: relative;
					display: flex;
					flex-direction: column;
					min-width: 0;
					word-wrap: break-word;
					background-color: #fff;
					background-clip: border-box;
				  ">
					@include('Front-end.block.error')
					@include('Front-end.thongbao')
					<div class = "card">
						<div class="card-header" style = "font-weight: bold;font-size: 16px;    color: #eeb10a;">{{ __('Đăng ký') }}</div>
						<div class = "card-body">
							<form id = "validate_form" action="{{route('postDangki')}}" method="POST" enctype="multipart/form-data" >
								<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>

								<div class="form-group">
									<label>Tên người dùng</label>
									<input class="form-control input" id = "name" type = "text" name = "name"  placeholder = "Nhập tên người dùng" value = "{{old('name')}}"></input>
								</div>

								<div class="form-group">
									<label>Email</label>
									<input class="form-control input" id = "email" type = "email" name = "email" placeholder = "Email" value = "{{old('email')}}"></input>
								</div>

								<div class="form-group">
									<label>Mật khẩu</label>
									<input class="form-control input" id = "password" type = "password" name = "password" placeholder = "Mật khẩu" ></input>
								</div>

								<div class="form-group">
									<label>Nhập lại mật khẩu</label>
									<input class="form-control input" id = "passwordAgain" type = "password" name = "passwordAgain" placeholder = "Nhập lại mật khẩu"  ></input>
								</div>

								<div class="form-group">
									<label style="display: inherit;">Ảnh đại diện</label>
									<img id="avar" name = "avar" class="img-circle" style="width: 100px;" height="30%" alt="avatar" src="/uploads/profile/default.PNG" accept="image/*"/>
									<input style = "margin-top:5px" type= "file" name = "avatar" value = "/uploads/profile/default.PNG" onchange="readURL(this);"></input>
									<script>
										function readURL(input) {

												if (input.files && input.files[0]) {

													var reader = new FileReader();

													reader.onload = function (e) {
														$('#avar')
															.attr('src', e.target.result)
															.width(150)
															.height(150)
													};
													reader.readAsDataURL(input.files[0]);
												}
										}

									</script>
								</div>

								<div class="form-group row mb-0">

									<div class="save" style = "padding:15px">
										<button type="submit" class="btn btn-primary" style = "margin-right: 20px;">
											{{ __('Đăng ký') }}
										</button>
										<button type="button" class="btn btn-default" style = "margin-right: 20px;" onclick = "click_cancel()">
											{{ __('Đăng nhập') }}
										</button>
									</div>

								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<script>
				function click_cancel(){
					window.location.href = "{{URL::route('login')}}";
				}
			</script>
		</div>
		@endsection
