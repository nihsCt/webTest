<?php
session_start();

//input sql
//status, timestamp...
$month = "AMONTH";
$daysOftheMonth = 31;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <script type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script>
        $(function () {
            Highcharts.chart('container', {
                title: {
                    text: '<?php echo $month?> Activity',
                    x: -20 //center
                },
                subtitle: {
                    text: '0: stand, 2: sit, 3: lie',
                    x: -20
                },
                xAxis: {
                    categories: [
                        <?php
                            for($i = 0; $i < $daysOftheMonth-1; ++$i){
                                echo $i.", ";
                            }
                            echo $daysOftheMonth;
                        ?>
                    ]
                },
                yAxis: {
                    title: {
                        text: 'Status'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    valueSuffix: ''
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
                },
                series: [{
                    name: 'KK',
                    data: [
                        0,0,0,1,2,2,1,2,0,1,2,1,1,1,2,2,2,0,0,0,0,0,0,0,1
                        <?php
                           //put status like the day
                        ?>
                    ]
                }]
            });
        });


    </script>

</head>
<body>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<!-- this div is for the chart -->

</body>
</html>