@extends('admin.master_admin')
@section('content')
	<div class="col-lg-12">
		<h1 class="page-header">Danh sách
			<small>người dùng</small>
			
				<a title ="Thêm người dùng" href="{{route('admin.user.add')}}" style="float: right;color:#4ed7e4">
					<button style = "color: #fff;background-color: #149c89;font-weight:bold" class="btn btn-default">Thêm mới người dùng</button>
				</a>
			
		</h1>
		
	</div>
		@include('admin.thongbao');
		<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<tr>
			
				<th >STT</th> 
				<th >Ảnh đại diện</th>
				<th >Tên người dùng</th>
				<th >Email</th>
				<th >Trường</th>
				<th >Khoa</th>
				<th >Chức năng</th>
																		
			</tr>
		</thead>
		<tbody>
			<?php $stt=0;?>
			@foreach($listUsers as $item)
			<?php $stt++;?>
			
			<tr>
				<td>{!! $stt !!}</td>
				<td>
					<div style="text-align: center;">
						<img  class="mx-auto d-block" src="{{asset($item->us_avatar)}}" width="30%" height="30%"/>
					</div>	
				</td>
				<td>{!! $item->us_name !!}</td>
				<td>{!! $item->email !!}</td>
				<td>{!! $item->created_at !!}</td>
				<td>{!! $item->updated_at !!}</td>
				<td style="text-align: center">
					<a href="{!! URL::route('admin.user.edit', $item->us_id) !!}" title="Sửa thông tin người dùng" style="text-decoration: none !important;color:#5aaf24">
						<i class="fas fa-user-edit"></i>
					</a> 
					<a id = "deleteItem"  href="{!! URL::route('admin.user.delete', $item->us_id) !!}" title="Xóa người dùng" style="text-decoration: none !important;color:#f91b1b" onclick="return alert_function('Bạn có chắc chắn muốn xóa!')">
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
