<?php
include("conexion/abrirconexion.php");
$matricula = $_POST["matricula"]; 
$apellido = $_POST["apellido"]; 
$nombre = $_POST["nombre"];  
$edad = $_POST["edad"]; 
$sexo = $_POST["sexo"]; 
$direccion = $_POST["direccion"];   
$estado = $_POST["estado"]; 
$ciudad = $_POST["ciudad"]; 
$cp = $_POST["cp"];
$estcivil = $_POST["estadocivil"]; 
$ocupacion = $_POST["ocupacion"]; 
$celular = $_POST["celular"]; 
$telcasa = $_POST["telcasa"];
$alergia = $_POST["alergia"];  
echo $alergia;
?>