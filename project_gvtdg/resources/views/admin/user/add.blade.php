@extends('admin.master_admin')
@section('content')
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
		.hr_style{
			margin-top: 20px;
			margin-bottom: 20px;
			border: 1px solid #eee !important;
		}
	</style>
	<div class = "col-lg-12">
		<h1 class="page-header">Người dùng
					<small>Thêm</small>
		</h1>
	</div>
	<?php
		if(sizeof($listSchool) == 0){
			return;
		}
	?>
	<div class="col-12" style="padding-bottom:120px">	
			@include('admin.block.error')
			@include('admin.thongbao')
			<form id = "validate_form" action="{{route('admin.user.postAdd')}}" method="POST" enctype="multipart/form-data" >
					<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
				 
				<div class="form-group" style="width: 100%;float: left;">
					<label class="col-lg-2 label_data">Ảnh đại diện</label>
					<div class="input_data" style="float:left;width: 80%;">
						<img id="avar" name = "avar" width="100px" height="30%" alt="avatar" src="{{asset('/uploads/profile/default.png')}}" accept="image/*"/>
						<input style = "margin-top: 10px;" type= "file" name = "avatar" value = "{{asset('/uploads/profile/default.png')}}" onchange="readURL(this);"></input>
					</div>

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
				
				<div class="form-group">
					<label class="col-lg-2 label_data">Tên người dùng</label>
					<input class="form-control input_data" style="" id = "name" type = "text" name = "name"  placeholder = "Nhập tên người dùng" value = "{{old('name')}}"></input>
				</div>
				
				</hr>
				
				<div class="form-group">
					<label class="col-lg-2 label_data">Mật khẩu</label>
					<input class="form-control input_data" id = "password" type = "password" name = "password" placeholder = "Mật khẩu" ></input>
				</div>
				
				<div class="form-group">
					<label class="col-lg-2 label_data">Nhập lại mật khẩu</label>
					<input class="form-control input_data" id = "passwordAgain" type = "password" name = "passwordAgain" placeholder = "Nhập lại mật khẩu"  ></input>
				</div>

				<div class="form-group">
					<label class="col-lg-2 label_data">Email</label>
					<input class="form-control input_data" id = "email" type = "email" name = "email" placeholder = "Email" value = "{{old('email')}}"></input>
				</div>
				
				<div class="form-group">
					<div class = "my_school">
						<label class="col-lg-2 label_data">Trường</label>
						<select name="school" id="school" class="form-control input_data" style="width:300px">
							<option value="">Chọn trường</option>
							@foreach($listSchool as $item)
							  <option value="{!! $item->sch_id !!}">{!! $item->sch_name !!}</option>
							@endforeach
						</select>
					</div>
				</div>	
				
				<div class="form-group">
					<div class="my_science">
						<label class="col-lg-2 label_data">Khoa</label>
						<select id="science" name="science" class="form-control input_data" style="width:300px">
							<option value="-1">Chọn khoa</option>
						</select>
					</div>
				</div>	
				
				<div class="form-group">
					<label class="col-lg-2 label_data">Role</label>
					<select id="role" name="role" class="form-control input_data" style="width:300px">
						<option value="1">Admin</option>
						<option value="2">Giảng viên</option>
						<option selected value="3">Khách</option>
					</select>
				</div>	
				
				<div class="submit-row form-group col-lg-12">
					<button type="button" class="btn_cancel" onclick = "cancel_function()">Cancel</button>
					<button type = "submit" id = "submit" type="button" class="btn_save" onclick = "save_function()">Save</button>
				</div>		
		</form>
	</div>
	<script>
			
			function cancel_function(){
				window.location.href = "{{route('admin.user.getList')}}";
			};
			
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
	

@endsection()

