<?php
require "../config/conexion.php";
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$celular = $_POST["celular"];
$email = $_POST["email"];
if ($edad > 17)
{
   echo "bienvenido ";
} else
{
   die("eres menor de edad");
}

$sql = "INSERT INTO usuarios(nombre, edad, celular, email, fecha_sys) VALUES ('".$nombre."',".$edad.",'".$celular."','".$email."',now())";
if ($conexion->query($sql))
{
echo "Cuenta de usuario creada";
} else
{
echo "Error al crear usuario";
}
?>