<?php
$host="localhost";
$usuario="grupo5";
$clave="123456";
$bd="aulta3";

$con = new mysqli($host,$usuario,$clave,$bd);
mysqli_query($con, "SET character_set_result=utf8");
if($con->connect_error){
    die("Database Error : .$con->connect_error");
}
?>