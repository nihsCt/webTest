<?php
session_start();
$statusOne = 0;
$statusTwo = 0;
$statusThree = 0;
$statusFour = 0;

$statusOne = $_GET['t1']*10;
$statusTwo = $_GET['h1']*10;
$statusThree = $_GET['t2']*10;
$statusFour = $_GET['h2']*10;
$data[] = "[$statusOne]";

/*

$minDate = $_GET['t1'];
$minNumber = sprintf("%02d", $_GET['h1']);
$maxDate = $_GET['t2'];
$maxNumber = sprintf("%02d", $_GET['h2']);


$link = mysqli_connect($db_hostname, $db_username, $db_password, $db_name) or die("Connect fail");

$minTimestamp = $minDate . " " . $minNumber . ":00:00";
$maxTimestamp = $maxDate . " " . $maxNumber . ":00:00";


$sql = "select status from behavior where (timestamp>='$minTimestamp' and timestamp<='$maxTimestamp');";

mysqli_query($link, 'SET CHARACTER SET big5');
mysqli_query($link, "SET collation_connect ='big5_chinese_ci'");

if ($result = mysqli_query($link, $sql)) {

    while ($row = mysqli_fetch_assoc($result)) {

        $temp = $row["status"];

        if ($temp == 0) {
            $statusOne++;
        } elseif ($temp == 1) {
            $statusTwo++;
        } elseif ($temp == 2) {
            $statusThree++;
        } elseif ($temp == 3) $statusFour++;


    }
    mysqli_free_result($result);
}
mysqli_close($link);
*/

echo "<div id=\"container\" style=\"min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto\"></div>";

?>