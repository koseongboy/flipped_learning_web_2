<?php
session_start();
unset($_SESSION["id_num"]);
unset($_SESSION["name"]);
unset($_SESSION["pw"]);
header("Location:http://125.141.139.75/main.php");
?>