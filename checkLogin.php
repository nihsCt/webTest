<?php
require('config.php');
session_start();
$connect = mysqli_connect($db_hostname, $db_username, $db_password, $db_name) or die("Connect fail");

if (mysqli_connect_errno()) {
    echo "ySQLi Connection was not established: " . mysqli_connect_error();
}else{

    if ($_POST['username'] != ""
        && $_POST['password'] != ""){

        $username = $_POST['username'];
        $password = $_POST['password'];

        //SET QUERY
        $sql = "Select * from user where Account='$username' and password='$password'";
        //SET QUERY

        mysqli_query($connect, 'SET CHARACTER SET big5');
        mysqli_query($connect, "SET collation_conncet = big5_chinese_ci");
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            //login confirm
            $_SESSION['user_email']=$username;

            if (empty($refer) || !$refer || $refer==='Login.html') {
                $refer = 'index.php';
                //where to go after login
            }

            header('Location: ' . $refer);
        } else{
            header('Location: login.html');
        }
    } else {
        // Not authenticated
        header('Location: login.html');
    }
}
?>
