<?php 

session_start();

if(!$_SESSION['auth']) {
    header('location: login.php');
}

?>

<h1>Welcome to our home page.</h1>