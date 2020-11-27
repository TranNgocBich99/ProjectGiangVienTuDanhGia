@extends('admin.master_admin')
@section('content')
	
			<div class = "col-lg-12">
					<h1 class="page-header">Trường
						<small>Sửa</small>
						<a title ="Thêm người dùng" href="{{route('admin.science.getList', $school->sch_id)}}" style="float: right;color:#4ed7e4">
							<button style = "color: #fff;background-color: #149c89;font-weight:bold" class="btn btn-default">Danh sách khoa</button>
						</a>
					</h1>
			</div>
			<div class="col-12" style="padding-bottom:120px">
					@include('admin.block.error')
					@include('admin.thongbao')
					<form id = "form_edit" action="{!! URL::route('admin.school.edit', $school->sch_id) !!}" method="POST" enctype="multipart/form-data" >
						@csrf
						<div class="form-group">		
							<label>Trường</label>
							<input  class = "form-control input" id = "name" type = "text" name = "name" autofocus="autofocus"  value="{!! $school->sch_name !!}" placeholder = "Trường"></input>
						</div>		

						<div class="form-group">
						
							<label>Địa chỉ</label>
							<input class = "form-control input" id = "address" type = "text" name = "address" autofocus="autofocus"  value="{!! $school->sch_address !!}" placeholder = "Địa chỉ"></input>

						</div>	
					
						<button type = "submit" class="btn btn-default " onclick = "save_function()" style="background-color:#b4f1ee">Lưu</button>
						<button type="button" class="btn btn-default " onclick = "cancel_function()" style="margin-left: 28px;background-color:#b4f1ee">Cancel</button>
						
					</form>
		</div>
	
		<script>
			function cancel_function(){
				window.location.href = "{{route('admin.school.getList')}}";
			}


		</script>
	</div>
@endsection()
@section('script')
	
@endsection
