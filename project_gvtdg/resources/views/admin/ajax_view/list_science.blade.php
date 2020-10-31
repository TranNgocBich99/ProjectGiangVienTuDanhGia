<option value = "-1">{!!$title!!}</option>
<?php
	if(count($data) == 0){
		return "";
	}
?>
@foreach($data as $item)
	<option value = "{!!$item->sci_id!!}" @if("")@endif>{!!$item->sci_name!!}</option>
@endforeach
