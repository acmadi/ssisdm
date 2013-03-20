<?php
session_start();

//unset($_SESSION['sesUserName']);
$_SESSION = array();
session_destroy();
session_unset();


header("Location: index.php");
?>