@extends('admin.master_admin')
@section('content')
    @php
        $result = number_format((float)($ratio*100), 2, '.', '');

    @endphp
	<h3>Tổng số giảng viên của đơn vị: {{ $totalUser }}</h3>
    <h3>Tổng số giảng viên đã lấy ý kiến: {{ $status }}</h3>
    <h3>Tỷ lệ: {{ $result }}%</h3>


    <h3>Điểm trung bình theo từng tiêu chí đánh giá: </h3>

    <table>
        <tr>
            <th>Số thứ tự</th>
            <th>Các nhiệm vụ</th>
            <th>Điểm trung bình</th>
            <th>Độ lệch chuẩn</th>
        </tr>
        @php
            $i = 1;
            $dem = count($point);
        @endphp
        @foreach($point as $item)
            @if($i <= $dem)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $item->eva_name }}</td>
                <td>{{ $item->point/$item->number_user }}</td>
                <td></td>
            </tr>
                @php
                    $i++;
                @endphp
            @endif
        @endforeach
    </table>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 13px;
        }

        tr:nth-child(even) {
            background-color: #f4f4f4;
        }
    </style>
@endsection()
