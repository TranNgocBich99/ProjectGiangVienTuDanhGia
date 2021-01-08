@extends('admin.master_admin')
@section('content')
	<div class="col-lg-12">
		<h1 class="page-header">Danh sách
			<small>Trường-ĐHQGHN</small>
			
				<a title ="Thêm người dùng" href="{{route('admin.school.add')}}" style="float: right;color:#4ed7e4">
					<button style = "color: #fff;background-color: #149c89;font-weight:bold" class="btn btn-default">Thêm mới</button>
				</a>
			
		</h1>
		
	</div>
		@include('admin.thongbao')
		<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<tr>
			
				<th >STT</th> 
				<th >Tên trường</th>
				<th >Địa chỉ</th>
				<th >Chức năng</th>
																		
			</tr>
		</thead>
		<tbody>
			<?php $stt=0;?>
			@foreach($listSchool as $item)
			<?php $stt++;?>
			
			<tr>
				<td>{!! $stt !!}</td>
				<td>{!! $item->sch_name !!}</td>
				<td>{!! $item->sch_address !!}</td>
				<td style="text-align: center">
					<a href="{!! URL::route('admin.school.edit', $item->sch_id) !!}" title="Sửa" style="text-decoration: none !important;color:#5aaf24">
						<i class="fas fa-user-edit"></i>
					</a> 
					<a id = "deleteItem"  href="{!! URL::route('admin.school.delete', $item->sch_id) !!}" title="Xóa" style="text-decoration: none !important;color:#f91b1b" onclick="return alert_function('Bạn có chắc chắn muốn xóa!')">
						<i class="fas fa-trash-alt"></i>
						<script>
							function alert_function(msg){
								if(confirm(msg)){
									return true;
								}
								return false;
							};	
						</script>
					</a>	
				</td>
			</tr>
			@endforeach
		</tbody>
		
	</table>
@endsection()
