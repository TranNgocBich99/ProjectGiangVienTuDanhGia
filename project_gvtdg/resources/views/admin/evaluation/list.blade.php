@extends('admin.master_admin')
@section('content')
	<div class="col-lg-12">
		<h1 class="page-header">Danh sách
			<small>tiêu chí đánh giá</small>
			
				<a title ="Thêm người tiêu chí" href="{{route('admin.evaluation.add')}}" style="float: right;color:#4ed7e4">
					<button style = "color: #fff;background-color: #149c89;font-weight:bold" class="btn btn-default">Thêm mới tiêu chí</button>
				</a>
			
		</h1>
		
	</div>
		@include('admin.thongbao')
		<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<tr>
			
				<th >STT</th> 
				<th >Tiêu chí đánh giá</th>
				<th >Điểm đánh giá</th>
				<th >Chức năng</th>
				
																		
			</tr>
		</thead>
		<tbody>
			<?php $stt=0;?>
			@foreach($listEvaluation as $item)
			<?php $stt++;?>
			
			<tr>
				<td>{!! $stt !!}</td>
				<td>{!! $item->eva_name !!}</td>
				<td>{!! $item->eva_ad_create_point  !!}</td>
			
				<td style="text-align: center">
					<a href="{!! URL::route('admin.evaluation.edit', $item->eva_id ) !!}" title="Sửa thông tin tiêu chí" style="text-decoration: none !important;color:#337ab7">
						<i class="fas fa-user-edit"></i>
					</a> &nbsp;|&nbsp;
					<a id = "deleteItem"  href="{!! URL::route('admin.evaluation.delete', $item->eva_id ) !!}" title="Xóa tiêu chí"style="text-decoration: none !important;color:#f91b1b" onclick="return alert_function('Bạn có chắc chắn muốn xóa!')">
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
