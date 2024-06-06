<?php
//session_start(); 

//unset($_SESSION["user_name"]);
//unset($_SESSION['mail']);
//session_destroy();

$expired_date =time()-(86400*30);                      // 86400=1day
setcookie("FULL_NAME" ,$_COOKIE["FULL_NAME"] ,$expired_date ,"/");

echo "you're logged out";
header("refresh:5; URL=./login.php");