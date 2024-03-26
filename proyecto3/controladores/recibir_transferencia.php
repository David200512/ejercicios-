<?php
require "../config/conexion.php";
$celular_cliente = $_POST["celular"];
$valor = $_POST["valor"];
$pin = $_POST["pin"];
$sql = "INSERT INTO transferencias(celular, valor, fecha_sys) VALUES ('".$celular_cliente."', ".$valor.", now() )";
if ($conexion->query($sql))
{
echo "Transacion exitosa";
} else
{
echo "Error al transferir saldo";
}
?>