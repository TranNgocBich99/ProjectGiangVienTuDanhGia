@extends('admin.master_admin')
@section('content')
    <link href="{{asset('css/admin/statistic.css')}}" rel="stylesheet">
    <div class="content">
        <h3>Xuất thống kê</h3>
        @php
            $school = request()->get('school', '');
            $year = request()->get('year', '');
            $se_id = request()->get('se_id', '');
            $eval_id = request()->get('eval_id', '');
        @endphp
        <div class="filter-data">
            <form method="GET">
                <label>
                    <span>Trường</span>
                    <select name="school" onchange="this.form.submit();">
                        <option @if($school == '') selected @endif value="">---Trường---</option>
                        @if(!$listSchools->isEmpty())
                            @foreach($listSchools as $key => $val)
                                <option @if($school == $val->sch_id) selected @endif value="{{$val->sch_id}}">{{$val->sch_name}}</option>
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
                                <option @if($year == $val->se_year) selected @endif value="{{$val->se_year}}">{{$val->se_year}}</option>
                            @endforeach
                        @endif
                    </select>
                </label>

                <label>
                    <span>Học kỳ</span>
                    <select name="se_id" onchange="this.form.submit();">
                        <option @if($se_id == '') selected @endif value="">---Học kỳ---</option>
                        @if(!$listSe->isEmpty())
                            @foreach($listSe as $key => $val)
                                <option @if($se_id == $val->se_id) selected @endif value="{{$val->se_id}}">{{$val->se_name}}</option>
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
        @if(!empty($year) && !empty($se_id) && !empty($eval_id))
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
            <p class="error">Bạn cần chọn trường, năm học và học kỳ</p>
        @endif
    </div>
@endsection()
