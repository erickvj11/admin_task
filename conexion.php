<?php
function Conectar(){
$usuario="root";
$pass=""; 
$server="localhost";
$db="admin_task";
$conn=mysqli_connect($server,$usuario,$pass,$db) or die ("Error al conectar con la base de datos".mysql_error());
    return $conn;
}

?>