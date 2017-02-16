<?php
//require('config.php');
session_start();
$username = "START";
/*
$connect = mysqli_connect($db_hostname, $db_username, $db_password, $db_name) or die("Connect fail");
if (mysqli_connect_errno()) {
    echo "MySQLi Connection was not established: " . mysqli_connect_error();
    $username = "SQL_Fail";
}else {
    if ($_SESSION['user_email'] != "") {
        $email = $_SESSION['user_email'];
        //SET QUERY
        $sql = "Select * from user where Account='$email'";
        //SET QUERY
        mysqli_query($connect, 'SET CHARACTER SET big5');
        mysqli_query($connect, "SET collation_conncet = big5_chinese_ci");
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) > 0) {
	    $row = mysqli_fetch_row($result);
	    $username = $row[2];
	    if($username == "") $username="UNSET";
        }
	else $username = "SQLFAIL";
    } else $username = "NO_SESSION";
}
$_SESSION['username']=$username;
*/
?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="https://code.highcharts.com/stock/highstock.js"></script>
    <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <style>
        html, body, h1, h2, h3, h4, h5 {
            font-family: "Raleway", sans-serif
        }
    </style>
    <style type="text/css">
        ${demo.css}
    </style>
    <title>TestChart</title>
    <script type="text/javascript">
        $(function () {
            Highcharts.chart('container2', {
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
                        name: 'Lie',
                        y: <?php echo $_SESSION['s1'];?>,
                        sliced: true,
                        selected: true
                    }, {
                        name: 'Stand',
                        y: <?php echo $_SESSION['s2'];?>
                    }, {
                        name: 'Sit',
                        y: <?php echo $_SESSION['s3'];
                        unset($_SESSION['s1']);
                        unset($_SESSION['s2']);
                        unset($_SESSION['s3']);
                        ?>
                    }]
                }]
            });
        });
    </script>


    <script type="text/javascript">
        $(function () {
            Highcharts.setOptions({
                global: {
                    useUTC: false
                }
            });
            // Create the chart
            Highcharts.stockChart('container1', {
                chart: {
                    /*
                     events: {
                     load: function () {

                     // set up the updating of the chart each second
                     //var series = this.series[0];
                     setInterval(function () {
                     var x = (new Date()).getTime(), // current time
                     y = Math.round(Math.random() * 2);
                     series.addPoint([x, y], true, true);
                     }, 1000);
                     }
                     }
                     */
                },
                rangeSelector: {
                    buttons: [{
                        count: 1,
                        type: 'week',
                        text: 'Week'
                    }, {
                        count: 1,
                        type: 'month',
                        text: 'Month'
                    }, {
                        count: 1,
                        type: 'year',
                        text: 'year'
                    }, {
                        type: 'all',
                        text: 'All'
                    }],
                    inputEnabled: false,
                    selected: 1
                },
                title: {
                    text: 'test '
                },
                exporting: {
                    enabled: false
                },
                series: [{
                    name: 'Status',
                    data: (function () {
                        // generate an array of random data
                        var data = [];
                        /*
                         //var time = (new Date()).getTime();
                         //var time = (new Date()).getTime();
                         var time = (new Date("2017-02-15 14:25:10")).getTime();
                         var i;
                         for (i = -99; i <= 0; i += 1) {
                         data.push([
                         time + i * 86400000,
                         Math.round(Math.random() * 2)
                         ]);
                         }
                         */
                        <?php
                        $timestamp = '2017-02-15 14:25:10';
                        date_default_timezone_set("Asia/Taipei");
                        $timestamp = date(strtotime($timestamp)) * 1000;
                        for ($i = 0; $i < 500; $i++) {
                            $status = $i%3;
                            /*

                            $timestamp = DateTime::createFromFormat('Y-m-d H:i:s', $timestamp);
                            $timestamp = $timestamp->getTimestamp();

                            */
                            // generate an array of random data

                            echo "data.push([" . ($timestamp + $i * 24 * 60 *60000) . "," . $status . "]); ";
                        }
                        ?>
                        return data;
                    }())
                }]
            });
        });
    </script>
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
                        'Seattle HQ',
                        'San Francisco',
                        'Tokyo'
                    ]
                },
                yAxis: [{
                    min: 0,
                    title: {
                        text: 'Status comparison'
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
                    name: 'Stand',
                    color: 'rgba(165,170,217,1)',
                    data: [150, 73, 20],
                    pointPadding: 0.3,
                    pointPlacement: -0.2
                }, {
                    name: 'Sit',
                    color: 'rgba(126,86,134,.9)',
                    data: [140, 90, 40],
                    pointPadding: 0.4,
                    pointPlacement: -0.2
                }, {
                    name: 'Lie down',
                    color: 'rgba(248,161,63,1)',
                    data: [183.6, 178.8, 198.5],
                    tooltip: {
                        valuePrefix: '$',
                        valueSuffix: ' M'
                    },
                    pointPadding: 0.3,
                    pointPlacement: 0.2,
                    yAxis: 1
                }, {
                    name: 'Fall down',
                    color: 'rgba(186,60,61,.9)',
                    data: [203.6, 198.8, 208.5],
                    tooltip: {
                        valuePrefix: '$',
                        valueSuffix: ' M'
                    },
                    pointPadding: 0.4,
                    pointPlacement: 0.2,
                    yAxis: 1
                }]
            });
        });
    </script>


    <script>
        // Get the Sidenav
        var mySidenav = document.getElementById("mySidenav");
        // Get the DIV with overlay effect
        var overlayBg = document.getElementById("myOverlay");
        // Toggle between showing and hiding the sidenav, and add overlay effect
        function w3_open() {
            if (mySidenav.style.display === 'block') {
                mySidenav.style.display = 'none';
                overlayBg.style.display = "none";
            } else {
                mySidenav.style.display = 'block';
                overlayBg.style.display = "block";
            }
        }
        // Close the sidenav with the close button
        function w3_close() {
            mySidenav.style.display = "none";
            overlayBg.style.display = "none";
        }
    </script>
</head>


<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-container w3-top w3-black w3-large w3-padding" style="z-index:4">
    <button class="w3-btn w3-hide-large w3-padding-0 w3-hover-text-grey" onclick="w3_open();"><i class="fa fa-bars"></i>
        Menu
    </button>
    <a href="logout.php" class="btn btn-default btn-lg">
        <span class="glyphicon glyphicon-log-out w3-right">Log out</span>
    </a>
</div>

<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-collapse w3-white w3-left" style="z-index:3;width:300px;" id="mySidenav"><br>
    <div class="w3-container w3-row">
        <div class="w3-col s4">
            <a href="index.php"><img src="man.png" class="w3-circle w3-margin-right" style="width:46px">
        </div>

        <div class="w3-col s8">
            <span>Welcome, <strong><?php echo $_SESSION['username'] ?></strong> </span><br>
        </div>
    </div>
    <hr>
    <div class="w3-container">
        <h5>List</h5>
    </div>
    <a href="#" class="w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i
                class="fa fa-remove fa-fw"></i> Close Menu</a>
    <a href="index.php" class="w3-padding"><i class="fa fa-users fa-fw"></i>Overview</a>
    <a href="stream.php" class="w3-padding"><i class="fa fa-eye fa-fw"></i> Stream</a>
    <a href="history.php" class="w3-padding w3-blue"><i class="fa fa-history fa-fw"></i>History</a>
    <a href="settings.php" class="w3-padding"><i class="fa fa-cog fa-fw"></i> Settings</a><br><br>
</nav>


<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
     title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <div class="w3-container w3-section">
        <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-rest">
                <h5>The activity of the year</h5>
                <div id="container1" style="min-width: 400px; height: 400px; margin: 0 auto"></div>

            </div>
        </div>

    </div>


    <div class="w3-container w3-section">
        <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-rest">
                <h5>TO compare to the last month</h5>
                <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>

            </div>
        </div>

    </div>

    <div class="w3-container w3-section">
        <form method="GET" action="testPChart_Session_get.php">
            <label for="t1, h1">START:</label>
            <input type="date" name="t1" id="t1" placeholder="t1">
            <input type="number" name="h1" id="h1" value="1" placeholder="h1">
            ~
            <label for="t2, h2">END:</label>
            <input type="date" name="t2" id="t2" placeholder="t2">
            <input type="number" name="h2" id="h2" value="1" placeholder="h2">
            <br>
            <button type="SUBMIT" id="submit">Submit</button>
        </form>
        <br>

    </div>

    <div id="container2" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

    <!--
    <div class="w3-row-padding w3-margin-bottom">
          <div class=" w3-half w3-container w3-padding-16">
        <h5>General States</h5>
         <div id="content"></div>
        <p><img src="pie.php"></p>
      <hr>
    </div>
    </div>
      <!-- End page content -->


</body>
</html>