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
<body >
	<div class="header">
		<div class="container">
			<h3 style="text-align: center">PHIẾU LẤY Ý KIẾN GIẢNG VIÊN </h1>
			<h4 style="text-align: center">(Năm học 2020 – 2021)</h1>
		</div>	
	</div>
	<div class="container">
		<form action="{!! URL::route('post_form') !!}" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
			<div class="form-group">
				
				<div class="content2">
					<div class="container">
						<h4>1. Giảng viên tự đánh giá chất lượng các nhiệm vụ đã thực hiện trong năm học</h4>
						<div class="dg" >
							<div class="dg2">Thang đánh giá: </div>
							<div class="dg1">
								<label><input type="radio" name="select" /><span>1</span> Rất không tốt</label>
								<label><input type="radio" name="select" /><span>2</span> Không tốt</label>
								<label><input type="radio" name="select" /><span>3</span> Bình thường</label>
								<label><input type="radio" name="select" /><span>4</span> Tốt</label>
								<label><input type="radio" name="select" /><span>5</span> Rất tốt</label>
							</div>
							
						</div>
					</div>
					
				</div>
			
				<div class="content3">
					<div class="container">
						<table class="table table-bordered">
							<thead>
							  <tr>
								<th scope="col"></th>
								<th scope="col">Các nhiệm vụ</th>
								<th scope="col">Thang đánh giá</th>
								
							  </tr>
							</thead>
							<tbody>
								<?php $stt=0;?>
								@foreach($nhiem_vu as $item)
								<?php $stt++;?>
								  <tr>
									<th scope="row">{!! $stt !!}</th>
									<td>{!! $item->eva_name !!}</td>
									<td class="count" style="display: flex; justify-content: space-between">
										@for ($i = 1; $i <= $item->eva_ad_create_point; $i++)
											<label><input type="radio" name="{!!$item->eva_id!!}"  value="{!! $i !!}"/><span>{!! $i !!}</span></label>
										@endfor
									</td>
								  </tr>
								@endforeach
							</tbody>
						  </table>
					</div>
					
				</div>
				<div class="content2">
					<div class="container">
						<h4>2. Giảng viên đánh giá các hoạt động giảng dạy và hỗ trợ giảng dạy</h4>
						<div class="dg" >
							<div class="dg2">Thang đánh giá: </div>
							<div class="dg1">
								<label><input type="radio" name="select" /><span>1</span> Hoàn toàn không đồng ý</label>
								<label><input type="radio" name="select" /><span>2</span> Cơ bản không đồng ý</label>
								<label><input type="radio" name="select" /><span>3</span> Cơ bản đồng ý</label>
								<label><input type="radio" name="select" /><span>4</span> Đồng ý</label>
								<label><input type="radio" name="select" /><span>5</span> Hoàn toàn đồng ý</label>
							</div>
							
						</div>
					</div>
					
				</div>
			
				<div class="content3">
					<div class="container">
						<table class="table table-bordered">
							<thead>
							  <tr>
								<th scope="col"></th>
								<th scope="col">Nội dung đánh giá</th>
								<th scope="col">Thang đánh giá</th>
								
							  </tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row"></th>
									<td style="text-align: center; font-weight: bold">Phần 1. Thông tin về học phần và chương trình đào tạo</td>
									<td >
										
									</td>
									@foreach($thong_tin_hoc_phan as $item)
										<?php $stt++;?>
									  <tr>
										<th scope="row">{!! $stt !!}</th>
										<td>{!! $item->eva_name !!}</td>
										<td class="count" style="display: flex; justify-content: space-between">
											@for ($i = 1; $i <= $item->eva_ad_create_point; $i++)
												<label><input type="radio" name="{!!$item->eva_id!!}"  value="{!! $i !!}" /><span>{!! $i !!}</span></label>
											@endfor
										</td>
									  </tr>
									@endforeach
								<tr>
									<th scope="row"></th>
									<td style="text-align: center; font-weight: bold">Phần 2. Kiểm tra, đánh giá</td>
									<td ></td>
								</tr>
								@foreach($kiem_tra_danh_gia as $item)
									<?php $stt++;?>
									 <tr>
										<th scope="row">{!! $stt !!}</th>
										<td>{!! $item->eva_name !!}</td>
										<td class="count" style="display: flex; justify-content: space-between">
											@for ($i = 1; $i <= $item->eva_ad_create_point; $i++)
												<label><input type="radio" name="{!!$item->eva_id!!}"  value="{!! $i !!}"/><span>{!! $i !!}</span></label>
											@endfor
										</td>
									</tr>
								@endforeach
							  
								  <tr>
									<th scope="row"></th>
									<td style="text-align: center; font-weight: bold">Phần 3. Một số hoạt động quản trị </td>
									<td >
									  
									  </td>
								  </tr>
								@foreach($hoat_dong_quan_tri as $item)
									<?php $stt++;?>
								  <tr>
									<th scope="row">{!! $stt !!}</th>
									<td>{!! $item->eva_name !!}</td>
									<td class="count" style="display: flex; justify-content: space-between">
										@for ($i = 1; $i <= $item->eva_ad_create_point; $i++)
											<label><input type="radio" name="{!!$item->eva_id!!}"  value="{!! $i !!}"/><span>{!! $i !!}</span></label>
										@endfor
									</td>
								  </tr>
								@endforeach
							 
								<tr>
									<th scope="row"></th>
									<td style="text-align: center; font-weight: bold">Phần 4. Công tác hỗ trợ và cơ sở vật chất phục vụ giảng dạy học phần</td>
									<td ></td>
								</tr>
								
								@foreach($cong_tac_ho_tro as $item)
									<?php $stt++;?>
								  <tr>
									<th scope="row">{!! $stt !!}</th>
									<td>{!! $item->eva_name !!}</td>
									<td class="count" style="display: flex; justify-content: space-between">
										@for ($i = 1; $i <= $item->eva_ad_create_point; $i++)
											<label><input type="radio" name="{!!$item->eva_id!!}"  value="{!! $i !!}"/><span>{!! $i !!}</span></label>
										@endfor
									</td>
									
								  </tr>
								@endforeach
							  
							</tbody>
						  </table>
					</div>
					
				</div>
				<div class="content3">
					<div class="container">
						<label >Các ý kiến khác của giảng viên:</label>
						<textarea style="width: 500px; height: 100px" name="user_self_think"></textarea>
					</div>
					
				</div>
			<button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
		  </form>
	</div>
	
	

</body>
</html>