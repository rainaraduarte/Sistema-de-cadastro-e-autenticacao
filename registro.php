<?php
session_start();
$_SESSION["nome"] =  $_POST["nome"];

$_SESSION["usuario"] =  $_POST["usuario"];

$_SESSION["senha"] =  $_POST["senha"];

echo "Redirect";
header("Location: login.php");
exit();
?>
