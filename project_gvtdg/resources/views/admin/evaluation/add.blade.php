@extends('admin.master_admin')
@section('content')
			
			<div class = "col-lg-12">
			
				<h1 class="page-header">Thêm 
							<small>tiêu chí đánh giá</small>
				</h1>
					
			</div>
		
				<div class="col-12" style="padding-bottom:120px">	
					@include('admin.block.error')
					@include('admin.thongbao')
					<form id = "validate_form" action="{{route('admin.evaluation.postAdd')}}" method="POST" enctype="multipart/form-data" >
							<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
							
									<div class="form-group">
										<label>Nội dung tiêu chí đánh giá</label>
										<input class="form-control input" id = "name" type = "text" name = "name"  placeholder = "Nhập nội dung tiêu chí" value = ""></input>
									</div>
									
									<div class="form-group">
										<label>Điểm tiêu chí đánh giá</label>
										<input class="form-control input" id = "point" type = "number" name = "point" placeholder = "Điểm tiêu chí đánh giá" ></input>
									</div>
									
									
										<button type = "submit" id = "submit" class="btn btn-success" style="background-color:#228B22" onclick = "save_function()">Lưu</button>
										<button type="button" class="btn btn-danger" onclick = "cancel_function()" style="margin-left: 28px;background-color:#DC143C">Hủy</button>
										
					</form>
				
			</div>
		<script>
			function cancel_function(){
				window.location.href = "{{route('admin.evaluation.getList')}}";
			}
			$(document).ready(function(){	
				$("#submit").on('click', function () {
					var eva_name = $("#name").val();
					var eva_ad_create_point = $("#point").val();
					if(eva_name != "" && eva_ad_create_point != ""){
						$.ajax({});
					}
				});
				
			});
			
		</script>
		

@endsection()

