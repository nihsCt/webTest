<?php
session_start();

echo "<br>";

for($i = '0'; $i < '10'; $i++){
    echo "  ".$_SESSION[$i];
}
echo "<br>".$_SESSION['a'];
?>
<br>
<a href='testLineChart.php'> Show Chart </a>
<br>
<a href='logout.php'> Logout </a>
<br>
<a href="session_start.php"> Login </a>
