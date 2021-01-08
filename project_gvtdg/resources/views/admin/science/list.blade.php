@extends('admin.master_admin')
@section('content')
	<div class="col-lg-12">
		<h1 class="page-header">Danh sách
			<small>Khoa</small>
			
				<a title ="Thêm khoa" href="{{route('admin.science.add')}}" style="float: right;color:#4ed7e4">
					<button style = "color: #fff;background-color: #149c89;font-weight:bold" class="btn btn-default">Thêm mới</button>
				</a>
			
		</h1>
		
	</div>
		@include('admin.thongbao')
		<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<tr>
			
				<th >STT</th> 
				<th >Tên khoa</th>
				<th >Chức năng</th>
																		
			</tr>
		</thead>
		<tbody>
			<?php $stt=0;?>
			@foreach($listScience as $item)
			<?php $stt++;?>
			
			<tr>
				<td>{!! $stt !!}</td>
				<td>{!! $item->sci_name !!}</td>
				<td style="text-align: center">
					<a href="{!! URL::route('admin.science.edit', $item->sci_id) !!}" title="Sửa" style="text-decoration: none !important;color:#5aaf24">
						<i class="fas fa-user-edit"></i>
					</a> 
					<a id = "deleteItem"  href="{!! URL::route('admin.science.delete', $item->sci_id) !!}" title="Xóa" style="text-decoration: none !important;color:#f91b1b" onclick="return alert_function('Bạn có chắc chắn muốn xóa!')">
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
