<option value = "-1">{!!$title!!}</option>
<?php
	if(count($data) == 0){
		return "";
	}
?>
@foreach($data as $item)
	<option value = "{!!$item->se_id!!}" @if("")@endif>{!!$item->se_name!!}</option>
@endforeach
