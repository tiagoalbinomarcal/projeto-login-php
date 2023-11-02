<?php
/*
if(!isset($_SESSION)){
    session_start();
}

session_destroy();
header('location: index.php')
*/

setcookie("TestCookie['id']", "", time() - 3600); 
header('location: api/index.php')
?>