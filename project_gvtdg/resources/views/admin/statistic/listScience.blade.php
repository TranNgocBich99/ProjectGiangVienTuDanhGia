@extends('admin.master_admin')
@section('content')
    <link href="{{asset('css/admin/statistic.css')}}" rel="stylesheet">
    @php
        $result = number_format((float)($ratio*100), 2, '.', '');

    @endphp
    <div class="header">
        <h2>MẪU BÁO CÁO TỔNG HỢP KẾT QUẢ LẤY Ý KIẾN GIẢNG VIÊN</h2>
        <p class="note">(Kèm theo Hướng dẫn số ………../HD-ĐHQGHN ngày ……. tháng ……. năm 2019
            của Giám đốc Đại học Quốc gia Hà Nội)</p>
        <div class="school">
            <div class="col-left">
                <p>ĐẠI HỌC QUỐC GIA HÀ NỘI</p>
                <p class="science">TRƯỜNG/KHOA</p>
            </div>
            <div class="col-right">
                <p>Ngày 10 tháng 11 năm 2020</p>
            </div>
        </div>
        <div class="title">
            <h1>BÁO CÁO TỔNG HỢP KẾT QUẢ LẤY Ý KIẾN GIẢNG VIÊN</h1>
            <p class="year">(Năm học 2020 - 2021)</p>
        </div>
    </div>

    <div class="select-school">
        @php
            $science = request()->get('science', '');
            $year = request()->get('year', '');
        @endphp
        <form method="GET">
            <input type="hidden" name="year" value="{{$year}}" />
            <label>
                <span>Trường</span>
                <select name="school" id="school" class="form-control input_data" style="width:300px">
                            <option value="">Chọn trường</option>
                            @foreach($listSchool as $item)
                              <option value="{!! $item->sch_id !!}">{!! $item->sch_name !!}</option>
                            @endforeach
                        </select>
            </label>

            <label>
                    <span>Khoa</span>
                    <select id="science" name="science" class="form-control input_data" style="width:300px" onchange="this.form.submit();">
                        <option @if($science == '') selected @endif value="">---Khoa---</option>
                            @if(!$listScience->isEmpty())
                                @foreach($listScience as $key => $val)
                                    <option @if($science == $val->sci_id) selected @endif value="{{$val->sci_id}}">{{$val->sci_name}}</option>
                                @endforeach
                            @endif
                        </select>
                </label>
        </form>
    </div>

    <div class="content">
        <h3>Phần A. Thống kê chung</h3>
        <div class="result">
            <p>- Tổng số giảng viên của đơn vị:<span>  {{ $totalUser }}</span></p>
            <p>- Tổng số giảng viên đã lấy ý kiến:<span> {{ $status }}</span> </p>
            <p>- Tỷ lệ:<span> {{ $result }}%</span> </p>
        </div>
        <h3>Phần B. Kết quả tổng hợp ý kiến giảng viên</h3>
        <div class="filter-data">
            <form method="GET">
                <input type="hidden" name="science" value="{{$science}}" />
                <label>
                    <span>Năm học</span>
                    <select name="year" onchange="this.form.submit();">
                        <option @if($year == '') selected @endif value="">---Năm học---</option>
                        @if(!$listYears->isEmpty())
                            @foreach($listYears as $key => $val)
                                <option @if($year == $val->ye_id) selected @endif value="{{$val->ye_id}}">{{$val->ye_start}}</option>
                            @endforeach
                        @endif
                    </select>
                </label>
            </form>
        </div>
        @if(!empty($science) && !empty($year))
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>Số thứ tự</th>
                <th>Các nhiệm vụ</th>
                <th>Điểm trung bình</th>
                <th>Độ lệch chuẩn</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
                $dem = count($point);
            @endphp
            @foreach($point as $item)
                @if($i <= $dem)
                    @php
                    $dtb = $item->point/$item->number_user;
                    @endphp
                <tr>
                    <td class="number">{{ $i }}</td>
                    <td class="name">{{ $item->eva_name }}</td>
                    <td class="number"> {{ number_format((float)($dtb), 2, '.', '') }} </td>
                    <td class="number">
                        @php
                        if(isset($dlcDataRes[$item->eva_id])){
                            $dataDLC = $dlcDataRes[$item->eva_id];
                            $count_teacher = count($dataDLC) - 1;
                            if($count_teacher <= 0){
                                $count_teacher = 1;
                            }
                            $tc = 0;
                            if(!empty($dataDLC)){
                                foreach ($dataDLC as $itemDLC) {
                                    $tc += pow($itemDLC->user_rate_point - $dtb, 2);
                                }
                            }

                            echo number_format(($tc/$count_teacher), 2, '.', '');
                        }
                        @endphp
                    </td>
                </tr>
                    @php
                        $i++;
                    @endphp
                @endif
            @endforeach
        </tbody>
        </table>
        @else
            <p class="error">Bạn cần chọn khoa và năm học</p>
        @endif
    </div>
@endsection()
