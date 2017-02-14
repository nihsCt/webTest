<?php
session_start();
?>
<!---->


<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Highcharts Example</title>
<!---->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <style type="text/css">
        ${demo.css}
    </style>
    <script type="text/javascript">
        $(function () {
            Highcharts.chart('container', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Browser market shares January, 2015 to May, 2015'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },
                series: [{
                    name: 'Brands',
                    colorByPoint: true,
                    data: [{
                        name: 'S1',
                        y: <?php echo $_SESSION['s1'];?>,
                        sliced: true,
                        selected: true
                    }, {
                        name: 'S2',
                        y: <?php echo $_SESSION['s2'];?>
                    }, {
                        name: 'S3',
                        y: <?php echo $_SESSION['s3'];?>
                    }, {
                        name: 'S4',
                        y: <?php echo $_SESSION['s4'];
                        unset($_SESSION['s1']);
                        unset($_SESSION['s2']);
                        unset($_SESSION['s3']);
                        unset($_SESSION['s4']);
                        ?>
                    }]
                }]
            });
        });
    </script>
<!---->

    <title>AJAX</title>
</head>
<body>
<!---->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<!---->

<form method="GET" action="testPChart_Session_get.php">
    <label for="t1, h1"></label>
    <input name="t1" id="t1" placeholder="S1">
    <input name="h1" id="h1" placeholder="S2">
    <br>
    <label for="t2, h2"></label>
    <input name="t2" id="t2" placeholder="S3">
    <input name="h2" id="h2" placeholder="S4">
    <br>
    <button type="submit" id="submit">Submit</button>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here.</b></div>
</body>
</html>
