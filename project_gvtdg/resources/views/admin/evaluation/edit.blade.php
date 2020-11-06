@extends('admin.master_admin')
@section('content')
	
			<div class = "col-lg-12">
					<h1 class="page-header">Sửa
						<small>tiêu chí đánh giá</small>
					</h1>
			</div>
			<div class="col-12" style="padding-bottom:120px">
					@include('admin.block.error')
					@include('admin.thongbao')
					<form id = "form_edit" action="{{URL::route('admin.evaluation.edit', $evaluation->eva_id)}}" method="POST" enctype="multipart/form-data" >
						
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type = "hidden" name = "id" autofocus="autofocus"  value="{!! $evaluation->eva_id !!}" ></input>
						
						<div class="form-group">
							<label>Nội dung tiêu chí đánh giá</label>
							<input class="form-control input" id = "name" type = "text" name = "name"  placeholder = "Nhập nội dung tiêu chí" autofocus="autofocus" value = "{{$evaluation->eva_name}}"></input>
						</div>
									
						<div class="form-group">
							<label>Điểm tiêu chí đánh giá</label>
							<input class="form-control input" id = "point" type = "number" name = "point" placeholder = "Điểm tiêu chí đánh giá" autofocus="autofocus" value="{{$evaluation->eva_ad_create_point}}" ></input>
						</div>
						
						<button type = "submit" class="btn btn-default " onclick = "save_function()" style="background-color:#228B22" onclick = "save_function()">Lưu</</button>
						<button type="button" class="btn btn-default " onclick = "cancel_function()" onclick = "cancel_function()" style="margin-left: 28px;background-color:#DC143C">Hủy</button>
						
					</form>
		</div>
	
		<script>
			function cancel_function(){
				window.location.href = "{{route('admin.evaluation.getList')}}";

			}
			
		</script>
	</div>
@endsection()
@section('script')
	
@endsection
