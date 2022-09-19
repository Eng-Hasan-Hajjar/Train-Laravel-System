@extends('admin')
@section('chart_content')
{{--<script src="https://raw.githubusercontent.com/nnnick/Chart.js/master/dist/Chart.bundle.js"></script>--}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
{{--<script>--}}

    {{--var year = ['2020', '2021'];--}}




    {{--var barChartData = {--}}

        {{--labels: year,--}}

        {{--datasets: [{--}}

            {{--label: 'Click',--}}

            {{--backgroundColor: "rgba(220,220,220,0.5)",--}}

            {{--data: data_click--}}

        {{--},--}}
        {{--//     {--}}
        {{--//--}}
        {{--//     label: 'View',--}}
        {{--//--}}
        {{--//     backgroundColor: "rgba(151,187,205,0.5)",--}}
        {{--//--}}
        {{--//     data: data_viewer--}}
        {{--//--}}
        {{--// }--}}
        {{--]--}}

    {{--};--}}



    {{--window.onload = function() {--}}

        {{--var ctx = document.getElementById("canvas").getContext("2d");--}}

        {{--window.myBar = new Chart(ctx, {--}}

            {{--type: 'bar',--}}

            {{--data: barChartData,--}}

            {{--options: {--}}

                {{--elements: {--}}

                    {{--rectangle: {--}}

                        {{--borderWidth: 2,--}}

                        {{--borderColor: 'rgb(0, 255, 0)',--}}

                        {{--borderSkipped: 'bottom'--}}

                    {{--}--}}

                {{--},--}}

                {{--responsive: true,--}}

                {{--title: {--}}

                    {{--display: true,--}}

                    {{--text: 'Yearly Website Visitor'--}}

                {{--}--}}

            {{--}--}}

        {{--});--}}



    {{--};--}}

{{--</script>--}}
{{--/*****************************************************************/--}}
<!-- javascript -->

<script>
    $(function(){
        //get the pie chart canvas
        var cData = JSON.parse(`<?php echo $chart_data; ?>`);
        var ctx = $("#pie-chart");

        //pie chart data
        var data = {
            labels: cData.label,
            datasets: [
                {
                    label: "Reverasion Count",
                    data: cData.data,
                    backgroundColor: [
                        "#DEB887",
                        "#A9A9A9",
                        "#DC143C",
                        "#F4A460",
                        "#2E8B57",
                        "#1D7A46",
                        "#CDA776",
                    ],
                    borderColor: [
                        "#CDA776",
                        "#989898",
                        "#CB252B",
                        "#E39371",
                        "#1D7A46",
                        "#F4A460",
                        "#CDA776",
                    ],
                    borderWidth: [1, 1, 1, 1, 1,1,1]
                }
            ]
        };

        //options
        var options = {
            responsive: true,
            title: {
                display: true,
                position: "top",
                text: "Reversations By Years",
                fontSize: 18,
                fontColor: "#111"
            },
            legend: {
                display: true,
                position: "bottom",
                labels: {
                    fontColor: "#333",
                    fontSize: 16
                }
            }
        };

        //create Pie Chart class object
        var chart1 = new Chart(ctx, {
            type: "pie",
            //type: "line",
            //type: "bar",
            data: data,
            options: options
        });

    });
</script>

<script>
    $(function(){
        //get the pie chart canvas
        var cData = JSON.parse(`<?php echo $chart_data_users; ?>`);
        var ctx = $("#pie-chart-users");
        
        console.log(cData);
        //pie chart data
        var data = {
            labels: cData.data,
            datasets: [
                {
                    label: "Users Count",
                    data: cData.data,
                    backgroundColor: [
                        "#DEB887",
                        "#A9A9A9",
                        "#DC143C",
                        "#F4A460",
                        "#2E8B57",
                        "#1D7A46",
                        "#CDA776",
                    ],
                    borderColor: [
                        "#CDA776",
                        "#989898",
                        "#CB252B",
                        "#E39371",
                        "#1D7A46",
                        "#F4A460",
                        "#CDA776",
                    ],
                    borderWidth: [1, 1, 1, 1, 1,1,1],
                     Width:[10,10,10,10,10,10,10],

                }
            ]
        };

        //options
        var options = {
            responsive: true,
            title: {
                display: true,
                position: "top",
                text: "Users By Years",
                fontSize: 18,
                fontColor: "#111"
            },
            legend: {
                display: true,
                position: "bottom",
                labels: {
                    fontColor: "#333",
                    fontSize: 16
                }
            },
            scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                },
                stacked: true
            }]}
        };

        //create Pie Chart class object
        var chart1 = new Chart(ctx,{
            //type: "pie",
            //type: "line",
            type: "bar",
            data: data,
            options: options
        });

    });
</script>
{{--/*****************************************************************/--}}


{{--<div class="container">--}}

    {{--<div class="row">--}}

        {{--<div class="col-md-10 col-md-offset-4">--}}

            {{--<div class="panel panel-default">--}}

                {{--<div class="panel-heading">Dashboard</div>--}}

                {{--<div class="panel-body">--}}

                    {{--<canvas id="canvas" height="280" width="600"></canvas>--}}

                {{--</div>--}}

            {{--</div>--}}

        {{--</div>--}}

    {{--</div>--}}

{{--</div>--}}
<div class="col-md-10 col-md-offset-4">

    <div class="panel panel-default">

        <div class="panel-heading"></div>

        <div class="panel-body">

            {{--<canvas id="canvas" height="280" width="600"></canvas>--}}
            <div class="chart-container">
                <div class="pie-chart-container">
                    <canvas id="pie-chart"></canvas>
                </div>
            </div>
            <div class="chart-container">
                <div class="pie-chart-container">
                    <canvas id="pie-chart-users"></canvas>
                </div>
            </div>



        </div>

    </div>

</div>
@endsection

