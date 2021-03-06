<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>AJAX</title>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <style type="text/css">
        ${demo.css}
    </style>

    <script>
        function giveTime() {
            var t1 = document.getElementById("t1").value;
            var h1 = document.getElementById("h1").value;
            var t2 = document.getElementById("t2").value;
            var h2 = document.getElementById("h2").value;

            var xmlhttp;
            if (t1.length == 0 || h1.length == 0 || t2.length == 0 || h2.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            }
            if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            }
            else {// code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                }
            };

            xmlhttp.open("GET", "testAJAX_get.php?t1=" + t1 + "&h1=" + h1 + "&t2=" + t2 + "&h2=" + h2, true);
            xmlhttp.send();
        }

    </script>
    <title>AJAX</title>
</head>
<body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

<form>
    <label for="t1, h1">START:</label>
    <input name="t1" id="t1" VALUE="1" placeholder="t1">
    <input name="h1" id="h1" VALUE="2" placeholder="h1">
    <br>
    <label for="t2, h2">END:</label>
    <input name="t2" id="t2" VALUE="3" placeholder="t2">
    <input name="h2" id="h2" VALUE="4" placeholder="h2">
    <br>
    <button type="button" onclick="giveTime()">Submit</button>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here.</b></div>
</body>
</html>
