<?php
session_start();
$_SESSION["name"]="Rahul Deshmukh";
$_SESSION["comapny"]="QED42";
$_SESSION["state"]="West Bengal";
echo"The Session variables are as follows<br>";
echo $_SESSION["name"]." ".$_SESSION["comapny"]." ".$_SESSION["state"];
?>