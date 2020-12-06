<?php
	$tlt_record = 0;
	$tlt_record += count($nhiem_vu);
	$tlt_record += count($thong_tin_hoc_phan);
	$tlt_record += count($kiem_tra_danh_gia);
	$tlt_record += count($hoat_dong_quan_tri);
	$tlt_record += count($cong_tac_ho_tro);
?>
<div class="form-group col-md-12">fs

	<div class="content2">
		<div class="container">
			<h4>1. Giảng viên tự đánh giá chất lượng các nhiệm vụ đã thực hiện trong năm học</h4>
			<div class="dg" >
				<div class="dg2">Thang đánh giá: </div>
				<div class="dg1">
					<label><input type="radio" name="select" disabled /><span>1</span> Rất không tốt</label>
					<label><input type="radio" name="select" disabled /><span>2</span> Không tốt</label>
					<label><input type="radio" name="select" disabled /><span>3</span> Bình thường</label>
					<label><input type="radio" name="select" disabled /><span>4</span> Tốt</label>
					<label><input type="radio" name="select" disabled /><span>5</span> Rất tốt</label>
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
							@if (count($listEvalOfUser) > 0)
								@foreach($listEvalOfUser as $data)
									@if ($data->eval_id !== $item->eva_id)
										@continue
									@else
										@for ($i = 1; $i <= $item->eva_ad_create_point; $i++)
											<label><input @if("$data->user_rate_point" == "$i") checked @endif type="radio" name="{!!$item->eva_id!!}"  value="{!! $i !!}"/><span>{!! $i !!}</span></label>
										@endfor
										@break
									@endif
								@endforeach
							@else
								@for ($i = 1; $i <= $item->eva_ad_create_point; $i++)
									<label><input type="radio" name="{!!$item->eva_id!!}"  value="{!! $i !!}"/><span>{!! $i !!}</span></label>
								@endfor
							@endif
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
					<label><input type="radio" name="select" disabled /><span>1</span> Hoàn toàn không đồng ý</label>
					<label><input type="radio" name="select" disabled /><span>2</span> Cơ bản không đồng ý</label>
					<label><input type="radio" name="select" disabled /><span>3</span> Cơ bản đồng ý</label>
					<label><input type="radio" name="select" disabled /><span>4</span> Đồng ý</label>
					<label><input type="radio" name="select" disabled /><span>5</span> Hoàn toàn đồng ý</label>
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
								@if (count($listEvalOfUser) > 0)
									@foreach($listEvalOfUser as $data)
										@if ($data->eval_id !== $item->eva_id)
											@continue
										@else
											@for ($i = 1; $i <= $item->eva_ad_create_point; $i++)
												<label><input @if("$data->user_rate_point" == "$i") checked @endif type="radio" name="{!!$item->eva_id!!}"  value="{!! $i !!}"/><span>{!! $i !!}</span></label>
											@endfor
											@break
										@endif
									@endforeach
								@else
									@for ($i = 1; $i <= $item->eva_ad_create_point; $i++)
										<label><input type="radio" name="{!!$item->eva_id!!}"  value="{!! $i !!}"/><span>{!! $i !!}</span></label>
									@endfor
								@endif
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
								@if (count($listEvalOfUser) > 0)
									@foreach($listEvalOfUser as $data)
										@if ($data->eval_id !== $item->eva_id)
											@continue
										@else
											@for ($i = 1; $i <= $item->eva_ad_create_point; $i++)
												<label><input @if("$data->user_rate_point" == "$i") checked @endif type="radio" name="{!!$item->eva_id!!}"  value="{!! $i !!}"/><span>{!! $i !!}</span></label>
											@endfor
											@break
										@endif
									@endforeach
								@else
									@for ($i = 1; $i <= $item->eva_ad_create_point; $i++)
										<label><input type="radio" name="{!!$item->eva_id!!}"  value="{!! $i !!}"/><span>{!! $i !!}</span></label>
									@endfor
								@endif
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
							@if (count($listEvalOfUser) > 0)
								@foreach($listEvalOfUser as $data)
									@if ($data->eval_id !== $item->eva_id)
										@continue
									@else
										@for ($i = 1; $i <= $item->eva_ad_create_point; $i++)
											<label><input @if("$data->user_rate_point" == "$i") checked @endif type="radio" name="{!!$item->eva_id!!}"  value="{!! $i !!}"/><span>{!! $i !!}</span></label>
										@endfor
										@break
									@endif
								@endforeach
							@else
								@for ($i = 1; $i <= $item->eva_ad_create_point; $i++)
									<label><input type="radio" name="{!!$item->eva_id!!}"  value="{!! $i !!}"/><span>{!! $i !!}</span></label>
								@endfor
							@endif
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
							@if (count($listEvalOfUser) > 0)
								@foreach($listEvalOfUser as $data)
									@if ($data->eval_id !== $item->eva_id)
										@continue
									@else
										@for ($i = 1; $i <= $item->eva_ad_create_point; $i++)
											<label><input @if("$data->user_rate_point" == "$i") checked @endif type="radio" name="{!!$item->eva_id!!}"  value="{!! $i !!}"/><span>{!! $i !!}</span></label>
										@endfor
										@break
									@endif
								@endforeach
							@else
								@for ($i = 1; $i <= $item->eva_ad_create_point; $i++)
									<label><input type="radio" name="{!!$item->eva_id!!}"  value="{!! $i !!}"/><span>{!! $i !!}</span></label>
								@endfor
							@endif
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
			@if(count($thinkOfUser) > 0)
				<textarea rows="4" cols="50" name="user_self_think">{!!$thinkOfUser[0]->us_self_think!!}</textarea>
			@else
				<textarea rows="4" cols="50" name="user_self_think"></textarea>
			@endif
		</div>
	</div>

	<input name="count_record" value="{!!$tlt_record!!}" hidden></input>

</div>
