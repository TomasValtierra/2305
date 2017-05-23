<?php
include '../lib/conexion.php';
$conn=new Conexion;
if($conn->conectar()){
$nom=$_POST["nombre"];
$tipo=$_POST["tipoproducto"];
$precio=$_POST["precio"];
$sql="INSERT INTO productos(nombre,tipoproducto,precio) values('$nom',$tipo,$precio)";
$conn->objconn->query($sql);
echo $sql;
       
}

