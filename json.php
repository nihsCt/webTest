<?php
session_start();
$lie = 36;
$stand = 22;
$sit = 42;
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>JSON</title>


    <style type="text/css">
        ${demo.css}
    </style>
    <script type="text/javascript">
        $(document).ready(function () {
            Highcharts.setOptions({
                global: {
                    useUTC: false
                }
            });

            Highcharts.chart('container', {
                chart: {
                    type: 'spline',
                    animation: Highcharts.svg, // don't animate in old IE
                    marginRight: 10,
                    events: {
                        load: function () {

                            // set up the updating of the chart each second
                            var series = this.series[0];
                            setInterval(function () {
                                var x = (new Date()).getTime(), // current time
                                    y = Math.random();
                                series.addPoint([x, y], true, true);
                            }, 1000);
                        }
                    }
                },
                title: {
                    text: 'Live random data'
                },
                xAxis: {
                    type: 'datetime',
                    tickPixelInterval: 150
                },
                yAxis: {
                    title: {
                        text: 'Value'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    formatter: function () {
                        return '<b>' + this.series.name + '</b><br/>' +
                            Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>' +
                            Highcharts.numberFormat(this.y, 2);
                    }
                },
                legend: {
                    enabled: false
                },
                exporting: {
                    enabled: false
                },
                series: [{
                    name: 'Random data',
                    data: (function () {
                        // generate an array of random data
                        var data = [],
                            time = (new Date()).getTime(),
                            i;

                        for (i = -19; i <= 0; i += 1) {
                            data.push({
                                x: time + i * 1000,
                                y: Math.random()
                            });
                        }
                        return data;
                    }())
                }]
            });
        });
    </script>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


<form>
    <label for="t1, h1">START:</label>
    <input name="t1" id="t1" placeholder="t1">
    <input name="h1" id="h1" placeholder="h1">
    <br>
    <label for="t2, h2">END:</label>
    <input name="t2" id="t2" placeholder="t2">
    <input name="h2" id="h2" placeholder="h2">
    <br>
    <button type="button" onclick="giveTime()">Submit</button>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here.</b></div>
</body>
</html>
