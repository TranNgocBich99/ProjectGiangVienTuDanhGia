@extends('admin.master_admin')
@section('content')
    <link href="{{asset('css/admin/statistic.css')}}" rel="stylesheet">
    <div class="content">
        <h3>Xuất thống kê</h3>
        @php
            $school = request()->get('school', '');
            $year = request()->get('year', '');
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
        @if(!empty($eval_id) && !empty($school))
            <div class="row">
                <div class="col-lg-6">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="col-lg-6">
                    <canvas id="myChart1"></canvas>
                </div>
            </div>

            {!! $listYears->appends($_GET)->links() !!}

            <script>
                $(document).ready(function() {
                    var color = Chart.helpers.color;
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

                    var barChartData = {
                        labels: <?php echo json_encode(array_keys($dataResDTB)) ?>,
                        datasets: [{
                            label: 'Dataset 1',
                            backgroundColor: color(chartColors.red).alpha(0.5).rgbString(),
                            borderColor: chartColors.red,
                            borderWidth: 1,
                            data: <?php echo json_encode(array_values($dataResDTB)); ?>
                        }]

                    };

                    var config = {
                        type: 'bar',
                        data: barChartData,
                        options: {
                            responsive: true,
                            legend: {
                                display: false,
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Biểu đồ điểm trung bình'
                            }
                        }
                    };

                    window.myPie = new Chart(ctx, config);
                });
            </script>


            <script>
                $(document).ready(function() {
                    var color1 = Chart.helpers.color;
                    var chartColors1 = {
                        red: 'rgb(255, 99, 132)',
                        orange: 'rgb(255, 159, 64)',
                        yellow: 'rgb(255, 205, 86)',
                        green: 'rgb(75, 192, 192)',
                        blue: 'rgb(54, 162, 235)',
                        purple: 'rgb(153, 102, 255)',
                        grey: 'rgb(201, 203, 207)'
                    };
                    var ctx1 = document.getElementById('myChart1').getContext('2d');
                    var randomScalingFactor = function() {
                        return Math.round(Math.random() * 100);
                    };

                    var barChartData1 = {
                        labels: <?php echo json_encode(array_keys($dataResDLC)) ?>,
                        datasets: [{
                            label: 'Dataset 1',
                            backgroundColor: color1(chartColors1.green).alpha(0.5).rgbString(),
                            borderColor: chartColors1.green,
                            borderWidth: 1,
                            data: <?php echo json_encode(array_values($dataResDLC)); ?>
                        }]

                    };

                    var config1 = {
                        type: 'bar',
                        data: barChartData1,
                        options: {
                            responsive: true,
                            legend: {
                                display: false,
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Biểu đồ độ lệch chuẩn'
                            }
                        }
                    };

                    window.myPie1 = new Chart(ctx1, config1);
                });
            </script>
        @else
            <p class="error">Bạn cần chọn trường và tiêu chí</p>
        @endif
    </div>
@endsection()
