<?php
session_start();

// create guest identity
$_SESSION['guest'] = true;

// send guest to home
header("Location: home.php");
exit();
?>
