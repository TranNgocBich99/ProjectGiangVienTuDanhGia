@extends('admin.master_admin')
@section('content')

			
			<div class = "col-lg-12">
			
				<h1 class="page-header">Khoa
							<small>Thêm</small>
				</h1>
					
			</div>
		
				<div class="col-12" style="padding-bottom:120px">	
					@include('admin.block.error')
					@include('admin.thongbao')
					<form id = "validate_form" action="{{route('admin.science.postAdd')}}" method="POST" enctype="multipart/form-data" >
						@csrf
						<div class="form-group">		
							<label>Khoa</label>
							<input  class = "form-control input" id = "name" type = "text" name = "name" autofocus="autofocus"  placeholder = "Khoa"></input>
						</div>	

						<div class="form-group">
				            <label for="school">Danh mục</label>
				            <select name="school" id="school" class="form-control">
				            	<option>---Chọn---</option>
				                <?php
				                    if(!empty($list)) {
				                        foreach($list as $k => $v) {
				                            ?>
				                                <option value="{{ $v->sch_id }}">{{$v->sch_name}}</option>
				                            <?php
				                        }
				                    }

				                ?>
				            </select>
				        </div>

						<button type = "submit" id = "submit" class="btn btn-default" style="background-color:#b4f1ee" onclick = "save_function()">Lưu</button>
						<button type="button" class="btn btn-default " onclick = "cancel_function()" style="margin-left: 28px;background-color:#b4f1ee">Cancel</button>
						
					</form>
				
			</div>
		<script>
				function cancel_function(){
					window.location.href = "{{ url()->previous() }}";
				}
			
		</script>
		

@endsection()

