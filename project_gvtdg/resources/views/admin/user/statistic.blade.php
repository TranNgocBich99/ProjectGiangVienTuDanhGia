@extends('admin.master_admin')
@section('content')
	<div class="col-lg-12">
		<h1 class="page-header">Thống kê</h1>
			<select name="year" id="year" class="form-control" >
				<option value = "" >-- Chọn năm học --</option>
				@foreach($listYear as $year)
					<option value = "{!!$year->ye_id!!}" >{!!$year->ye_start !!} - {!!$year->ye_end!!}</option>
				@endforeach 
			</select>
			
			<div>
				@include('admin.thongbao')
				<div id="chartContainer"></div>
			</div>
	</div>
	<script type="text/javascript">
		
		$(document).ready(function(){	
			$("#year").change(function () {
				var ye_id = $("#year option:selected").val();
				var url = '{{route("ajax_get_eval_of_user")}}';
				$.ajax({
					type: 'GET',
					url:url,
					data: {ye_id:ye_id,us_id:<?php echo $user->us_id ?>},
					success:function(response){
						listEval = JSON.parse(response);
						chartRender(listEval);
					}
				});
				$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
			});
		})
		
		function chartRender(data){
			var dataPoints = [];
			var arr_label = [];
			var chart = new CanvasJS.Chart("chartContainer", {
				animationEnabled: true,
				theme: "light2",
				title: {
					text: ""
				},
				axisY: {
					title: "Điểm",
					titleFontSize: 24,
					includeZero: true
				},
				axisX: {
					title: "Tiêu chí",
					titleFontSize: 24,
					includeZero: true,
					labelFormatter: function(e){
						return "";
					}
				},
				
				data: [{
					//labels:arr_label,
					type: "column",
					//xValueFormatString:"",
					//yValueFormatString: "#,### Units",
					dataPoints: dataPoints
				}]
			});
			
			if(data.length > 0){
				addData();
			}
			function addData() {
				for (var i = 0; i < data.length; i++) {
					arr_label.push(data[i].eva_name);
					dataPoints.push({
						label:data[i].eva_name,
						x:data[i].eva_id,
						y: data[i].user_rate_point
					});
				}
				console.log(dataPoints);
				chart.render();
			}
		}
	</script>
	<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

@endsection()
