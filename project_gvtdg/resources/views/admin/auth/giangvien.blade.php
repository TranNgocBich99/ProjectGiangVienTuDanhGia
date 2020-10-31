@extends('admin.master_admin')
@section('content')
	<div class="col-lg-12">
		<h1 class="page-header">Danh sách
			
		</h1>
		
	</div>
		@include('admin.thongbao')
		<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<tr>
			
				<th>STT</th> 
				<th>Tên môn học</th>
				<th>Mã môn học</th>
				<th>Thứ trong tuần</th>
				<th>Số tín chỉ</th>
				<th>Giảng đường</th>
				<th>STT tiết</th>
				<th>Ngày bắt đầu</th>
				<th>Ngày kết thúc</th>	
				
			</tr>
		</thead>
		<tbody>
			<?php $stt=0;?>
			@foreach($list as $item)
			<?php $stt++;?>
			<tr>
				<td>{!! $stt !!}</td>
				<td>{!! $item->sh_subject !!}</td>
				<td>{!! $item->sh_sb_code !!}</td>
				<td>{!! $item->sh_thu !!}</td>
				<td>{!! $item->sh_so_tin_chi !!}</td>
				<td>{!! $item->sh_giang_duong !!}</td>
				<td>{!! $item->sh_stt_tiet!!}</td>
				<td>{!! $item->sh_ngay_bat_dau!!}</td>
				<td>{!! $item->sh_ngay_ket_thuc!!}</td>
				
			</tr>
			@endforeach
		</tbody>
		
	</table>
	
@endsection()
