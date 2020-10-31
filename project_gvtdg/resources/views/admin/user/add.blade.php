@extends('admin.master_admin')
@section('content')
			
	<div class = "col-lg-12">
		<h1 class="page-header">Người dùng
					<small>Thêm</small>
		</h1>
	</div>
	<div class="col-12" style="padding-bottom:120px">	
			@include('admin.block.error')
			@include('admin.thongbao')
			<form id = "validate_form" action="{{route('admin.user.postAdd')}}" method="POST" enctype="multipart/form-data" >
					<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
					
			<div class="form-group">
				<label>Tên người dùng</label>
				<input class="form-control input" id = "name" type = "text" name = "name"  placeholder = "Nhập tên người dùng" value = "{{old('name')}}"></input>
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
				<label>Email</label>
				<input class="form-control input" id = "email" type = "email" name = "email" placeholder = "Email" value = "{{old('email')}}"></input>
			</div>	
			
			<div class="form-group">
				<div class = "my_school" style="float: left;margin-right: 62px;">
					<label>Trường</label>
					<select name="school" id="school" class="form-control" style="width:200px">
						<option value="-1">Chọn trường</option>
						@foreach($listSchool as $item)
						  <option value="{!! $item->sch_id !!}">{!! $item->sch_name !!}</option>
						@endforeach
					</select>
				</div>
				<div class="my_science">
					<label>Khoa</label>
					<select id="science" name="science" class="form-control" style="width:200px">
						<option value="-1">Chọn khoa</option>
					</select>
				</div>
			</div>	
			
			 
			<div class="form-group">
				<label style="display: inherit;">Ảnh đại diện</label>
				<img id="avar" name = "avar" width="100px" height="30%" alt="avatar" src="/uploads/profile/default.png" accept="image/*"/>
				<input style = "margin-top:5px" type= "file" name = "avatar" value = "/uploads/profile/default.png" onchange="readURL(this);"></input>
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
				<label>Level</label>
				<label class="radio-inline">
					<input type = "radio" name = "type"  value="1">Admin</input>
				</label>
				<label class="radio-inline">
					<input type = "radio" name = "type" checked="checked" value="0">Thường</input>
				</label>
			</div>			
			
				<button type = "submit" id = "submit" class="btn btn-default" style="background-color:#b4f1ee" onclick = "save_function()">Lưu</button>
				<button type="button" class="btn btn-default " onclick = "cancel_function()" style="margin-left: 28px;background-color:#b4f1ee">Cancel</button>
				
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

