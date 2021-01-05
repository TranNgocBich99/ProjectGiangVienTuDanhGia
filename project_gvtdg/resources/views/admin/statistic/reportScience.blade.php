@extends('admin.master_admin')
@section('content')
    <link href="{{asset('css/admin/statistic.css')}}" rel="stylesheet">
    <div class="content">
        <h3>Xuất thống kê</h3>
        @php
            $school = request()->get('school', '');
            $science = request()->get('science', '');
            $year = request()->get('year', '');
            $eval_id = request()->get('eval_id', '');
        @endphp
        <div class="filter-data">
            <form method="GET">
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
                        <option @if($school == '') selected @endif value="">---Khoa---</option>
                            @if(!$listScience->isEmpty())
                                @foreach($listScience as $key => $val)
                                    <option @if($science == $val->sci_id) selected @endif value="{{$val->sci_id}}">{{$val->sci_name}}</option>
                                @endforeach
                            @endif
                        </select>
                </label>

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

                <label>
                    <span>Tiêu chí</span>
                    <select name="eval_id" onchange="this.form.submit();" class="eval-tk">
                        <option @if($eval_id == '') selected @endif value="">---Tiêu chí---</option>
                        @if(!$listEval->isEmpty())
                            @foreach($listEval as $key => $val)
                                <option @if($eval_id == $val->eva_id) selected @endif value="{{$val->eva_id}}">{{$val->eva_name}}</option>
                            @endforeach
                        @endif
                    </select>
                </label>
            </form>
        </div>
        @if(!empty($year) && !empty($eval_id))
            <canvas id="myChart"></canvas>
            <script>
                $(document).ready(function() {
                    var chartColors = {
                        red: 'rgb(255, 99, 132)',
                        orange: 'rgb(255, 159, 64)',
                        yellow: 'rgb(255, 205, 86)',
                        green: 'rgb(75, 192, 192)',
                        blue: 'rgb(54, 162, 235)',
                        purple: 'rgb(153, 102, 255)',
                        grey: 'rgb(201, 203, 207)'
                    };
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var randomScalingFactor = function() {
                        return Math.round(Math.random() * 100);
                    };
                    var config = {
                        type: 'pie',
                        data: {
                            datasets: [{
                                data: <?php echo json_encode($dataChart['percent']); ?>,
                                backgroundColor: [
                                    chartColors.red,
                                    chartColors.orange,
                                    chartColors.yellow,
                                    chartColors.green,
                                    chartColors.blue,
                                ],
                                label: 'Dataset 1'
                            }],
                            labels: <?php echo json_encode($dataChart['label']); ?>
                        },
                        options: {
                            responsive: true,
                            tooltips: {
                                callbacks: {
                                    label: function(tooltipItem, data) {
                                        var dataset = data.datasets[tooltipItem.datasetIndex];
                                        var meta = dataset._meta[Object.keys(dataset._meta)[0]];
                                        var total = meta.total;
                                        var currentValue = dataset.data[tooltipItem.index];
                                        var percentage = parseFloat((currentValue/total*100).toFixed(1));
                                        return '(' + percentage + '%)';
                                    },
                                    title: function(tooltipItem, data) {
                                        return data.labels[tooltipItem[0].index];
                                    }
                                }
                            },
                        }
                    };

                    window.myPie = new Chart(ctx, config);
                });
            </script>
        @else
            <p class="error">Bạn cần chọn khoa và năm học</p>
        @endif
    </div>
@endsection()
