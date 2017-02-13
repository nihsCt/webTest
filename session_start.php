<?php

session_start();

echo session_id();
echo "<br>";
for($i = '0'; $i < '10'; $i++){
    $_SESSION[$i] = $i % 3;
}

for($i = '0'; $i < '10'; $i++){
    echo "  ".$_SESSION[$i];
}

$_SESSION['a']= 1;
echo "<br>".$_SESSION['a'];
echo "<br><a href='session_nextPage.php'> next </a>";
?>