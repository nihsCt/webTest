
<?php
/*
$account = $_COOKIE['account'];
$password = $_COOKIE['password'];
echo $account ."<br>Pw: ".$password;
*/
session_start();
$account = $_SESSION['username'];
echo $account ."<br>Pw: ";

?>

