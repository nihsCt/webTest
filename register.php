<?php
require('config.php');
$connect = mysqli_connect($db_hostname, $db_username, $db_password, $db_name) or die("Connect fail");

if (mysqli_connect_errno()) {
    echo "ySQLi Connection was not established: " . mysqli_connect_error();
}else{

    if ($_POST['account'] != ""
        && $_POST['password'] != ""){

        $username = $_POST['username'];
        $account = $_POST['account'];
        $password = $_POST['password'];

        $sql = "INSERT INTO `user` (`account`, `password`, `name`) VALUES('".$account."', '".$password."', '".$username."')";

        mysqli_query($connect, 'SET CHARACTER SET big5');
        mysqli_query($connect, "SET collation_conncet = big5_chinese_ci");
        $result = mysqli_query($connect, $sql);

        $refer = 'login.html';
        header('Location: ' . $refer);
    } else {
        // Not authenticated
        header('Location: signUp.html');
    }
}

?>