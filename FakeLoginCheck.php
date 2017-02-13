<?php

$ID = "123@qwe.com";
$pw = "123123";
if ($_POST['username'] != ""
    && $_POST['password'] != ""){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $ID && $password === $pw) {
        /*
        $cookieexpiry = (time() + 21600);
        setcookie("account", $username, $cookieexpiry);
        setcookie("password", $password, $cookieexpiry);
        */
        session_start();
        $_SESSION['username'] = $ID;

        if (empty($refer) || !$refer || $refer=="fakeLogin.html") {
            $refer = 'showCookie.php';
            //where to go after login
        }

        header('Location: ' . $refer);
    } else{
        header('Location: fakeLogin.html');
    }

} else {
    // Not authenticated
    header('Location: fakeLogin.html');

}
?>