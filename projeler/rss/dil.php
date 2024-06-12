<?php
session_start();

$dil = $_GET["lang"];
$_SESSION["site_dili"]=$dil;

header("Location:index.php");
exit();

?>
