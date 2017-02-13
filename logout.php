<?php
header('Location: session_nextPage.php');

session_start();
echo "A: ".$_SESSION['a']." B:".$_SESSION['b']."<br>";
session_unset();
echo "A: ".$_SESSION['a']." B:".$_SESSION['b']."<br>";


?>
