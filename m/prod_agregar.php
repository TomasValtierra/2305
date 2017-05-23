<?php
include '../lib/conexion.php';
$conn=new Conexion;
if($conn->conectar()){
$nom=$_POST["nombre"];
$totusd=$_POST["totalusd"];
$ano=$_POST["ano"];
$sql="INSERT INTO productos(nombre,totalusd,ano) values('$nom',$totusd,$ano)";
$conn->objconn->query($sql);
echo $sql;
       
}

