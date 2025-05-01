<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "palcare";

$conn = mysqli_connect($server, $username, $password , $db);
if(!$conn){
    die("Conncetion failed". mysqli_connect_error());
}
?>