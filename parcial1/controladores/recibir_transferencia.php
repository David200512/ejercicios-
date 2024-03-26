<?php
require "../config/conexion.php";
$cantidad_gramos = $_POST["cantidad_gramos"];
$calidad = $_POST["calidad"];
if($calidad>3)
{
   die("han digitado una opcion no valida");
}
$ciudad = $_POST["ciudad"];
$sql = "INSERT INTO venta_marihuana(cantidad_gramos, calidad, ciudad, fecha_sys) VALUES (".$cantidad_gramos.",".$calidad.",".$ciudad.",now())";
if ($conexion->query($sql))
{
echo "Compra exitosa";
} else
{
echo "Compra fallida";
}
?>