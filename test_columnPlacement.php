<?php
//require ('config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Highcharts Example</title>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <style type="text/css">
        ${demo.css}
    </style>
    <script type="text/javascript">
        $(function () {
            Highcharts.chart('container', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Efficiency Optimization by Branch'
                },
                xAxis: {
                    categories: [
                        'Sun',
                        'Mon',
                        'Tue',
                        'Wed',
                        'Thur',
                        'Fri',
                        'Sat'
                    ]
                },
                yAxis: [{
                    min: 0,
                    title: {
                        text: 'Hours'
                    }
                }, {
                    title: {
                        text: 'Profit (millions)'
                    },
                    opposite: true
                }],
                legend: {
                    shadow: false
                },
                tooltip: {
                    shared: true
                },
                plotOptions: {
                    column: {
                        grouping: false,
                        shadow: false,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'stand',
                    color: 'rgba(247,80,0,1)',
                    data: [150, 73, 20,13,23,34,54],
                    pointPadding: 0.3,
                    pointPlacement: -0.3
                }, {
                    name: 'stand_lw',
                    color: 'rgba(255,160,66,1)',
                    data: [140, 90, 40,45,45,45,23],
                    pointPadding: 0.4,
                    pointPlacement: -0.3
                }, {
                    name: 'sit',
                    color: 'rgba(70,117,0,1)',
                    data: [183.6, 178.8, 198.5,45,78,54,34],

                    pointPadding: 0.3,
                    pointPlacement: 0.0,
                    yAxis: 1
                }, {
                    name: 'sit_lw',
                    color: 'rgba(140,234,0,1)',
                    data: [203.6, 198.8, 208.5,34,23,56,68],

                    pointPadding: 0.4,
                    pointPlacement: 0.0,
                    yAxis: 1
                }, {
                    name: 'lie',
                    color: 'rgba(0,75,151,1)',
                    data: [183.6, 178.8, 198.5,67,78,78,56],

                    pointPadding: 0.3,
                    pointPlacement: 0.3,
                    yAxis: 1
                }, {
                    name: 'lie_lw',
                    color: 'rgba(40,148,255,1)',
                    data: [203.6, 198.8, 208.534,34,34,34,76],

                    pointPadding: 0.4,
                    pointPlacement: 0.3,
                    yAxis: 1
                }]
            });
        });
    </script>
</head>
<body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>

</body>
</html>
