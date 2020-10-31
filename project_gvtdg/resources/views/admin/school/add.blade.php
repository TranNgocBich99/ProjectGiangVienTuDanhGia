@extends('admin.master_admin')
@section('content')
			
			<div class = "col-lg-12">
			
				<h1 class="page-header">Trường
							<small>Thêm</small>
				</h1>
					
			</div>
		
				<div class="col-12" style="padding-bottom:120px">	
					@include('admin.block.error')
					@include('admin.thongbao')
					<form id = "validate_form" action="{{route('admin.school.postAdd')}}" method="POST" enctype="multipart/form-data" >
						
						<div class="form-group">		
							<label>Trường</label>
							<input  class = "form-control input" id = "name" type = "text" name = "name" autofocus="autofocus"  placeholder = "Trường"></input>
						</div>		

						<div class="form-group">
						
							<label>Địa chỉ</label>
							<input class = "form-control input" id = "address" type = "text" name = "address" autofocus="autofocus"  placeholder = "Địa chỉ"></input>

						</div>	
						
						<button type = "submit" id = "submit" class="btn btn-default" style="background-color:#b4f1ee" onclick = "save_function()">Lưu</button>
						<button type="button" class="btn btn-default " onclick = "cancel_function()" style="margin-left: 28px;background-color:#b4f1ee">Cancel</button>
						
					</form>
				
			</div>
		<script>
				function cancel_function(){
					window.location.href = "{{route('admin.user.getList')}}";
				}
			
		</script>
		

@endsection()

