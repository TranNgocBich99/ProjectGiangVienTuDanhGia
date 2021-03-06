<!DOCTYPE html>
<html lang="en"><head>
	<title> Form </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script src="{{asset('js/FrontEndJs/user/main.js')}}"></script>
	<script src="{{asset('js/FrontEndJs/home/bootstrap.js')}}"></script>
	<link type= "text/css" rel="stylesheet" href="{{asset('css/FrontEndCss/user/main.css')}}">
	<link type= "text/css" rel="stylesheet" href="{{asset('css/FrontEndCss/home/font-awesome.css')}}">
	<link type= "text/css" rel="stylesheet" href="{{asset('css/FrontEndCss/home/bootstrap.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
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
	.select_year_sem{
		justify-content: center;
		display: flex;
	}
</style>
<body >
	<?php
		$user=null;
		if(Route::has('login')){
			$user = Auth::user();
		}
		$us_year=$us_year;
	?>
	
	<div class="header">
		<a href="{!! URL::route('home') !!}" style="display: block;padding: 20px;width: 108px;">Trang chủ</a>
		<div class="container">
			<h3 style="text-align: center">PHIẾU LẤY Ý KIẾN GIẢNG VIÊN </h1>
		</div>	
		
	</div>
	
	<div class="container">
		@include('admin.block.error')	
		@include('admin.thongbao')
		<form action="{!! URL::route('teacher.postForm') !!}" method="POST" enctype="multipart/form-data">
			<div class="select_year_sem col-md-12">
				<div class="select_item">
					<div class="sub_item" style="float: right;padding: 0;">
						<select name="year" id="year" class="form-control" style="width: 60%;float: right;">
							<option value = "" >Chọn năm học</option>
							@foreach($listYear as $year)
								@if(!is_null($us_year))
									<option @if("$year->ye_id" == "$us_year->ye_id") selected @endif value = "{!!$year->ye_id!!}" >{!!$year->ye_start !!} - {!!$year->ye_end!!}</option>
								@else
									<option value = "{!!$year->ye_id!!}" >{!!$year->ye_start !!} - {!!$year->ye_end!!}</option>
								@endif
							@endforeach 
						</select>
						<h4 style="float: right;width: 35%;">Năm học</h4>
					</div>
				</div>
			</div>
			
			<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
			
			<div id="showList">
				@include("Front-end.ajax_view.list_eval_of_year")
			</div>
			
			<div class="submit-row form-group col-lg-12">
				<button type="button" class="btn_cancel" onclick = "destroyFunction()">Hủy</button>
				<button type = "submit" id = "submit" type="button" class="btn_save" onclick = "save_function()">Save</button>
			</div>	
			
		 </form>
	</div>
	
	<script>
		$(document).ready(function(){	
			$("#year").change(function () {
				var ye_id = $("#year option:selected").val();
				var url = '{{route("ajax_get_list_eval")}}';
				$.ajax({
					type: 'GET',
					url:url,
					data: {ye_id:ye_id},
					success:function(data){
						$("#showList").html(data);
					}
				});
				$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
			});
		})
		function destroyFunction(){
			window.location.href = "{{route('home')}}";	
		}
	</script>

</body>
</html>