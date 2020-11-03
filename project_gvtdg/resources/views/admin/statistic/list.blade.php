@extends('admin.master_admin')
@section('content')
    @php
        $result = number_format((float)($ratio*100), 2, '.', '');
    @endphp
	<h3>Tổng số giảng viên của đơn vị: {{ $totalUser }}</h3>
    <h3>Tổng số giảng viên đã lấy ý kiến: {{ $status }}</h3>
    <h3>Tỷ lệ: {{ $result }}%</h3>
@endsection()
