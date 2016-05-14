/**
 * Saila Soft
 * @author Jonathan Rodriguez
 * @version 1.0 
 */ 

<?php

  require_once ('conexion/conexion.php');
$conexionSacadatos = new Conexion();
$mysqli = $conexionSacadatos->con();

/*
require("conexion/conexion.php");
*/

if(isset($_GET['editar'])){
    
    $matricula = $_POST["matricula"]; 
$apellido = $_POST["apellido"]; 
$nombre = $_POST["nombre"];
$fecha=$_POST["fecha"];
$edad = $_POST["edad"]; 
$sexo = $_REQUEST["sexo"]; 
$direccion = $_POST["direccion"];   
$estado = $_POST["estado"]; 
$ciudad = $_POST["ciudad"]; 
$cp = $_POST["cp"];
$estcivil = $_POST["estadocivil"]; 
$ocupacion = $_POST["ocupacion"]; 
$correo = $_POST["correo"]; 
$celular = $_POST["celular"]; 
$telcasa = $_POST["telcasa"];
$alergia = $_POST["alergia"];  
$id_odontologo=$_POST['id_odontologo'];

 
 echo $retVal = (!isset($matricula) ) ? "No se ha recibido dato ":
        " su id es ". $matricula ; 



    
}

echo $_GET["borrar"];
if(isset($_GET["borrar"])){
    
	$matricula=$_GET["eliminar"];
    
	$consulta = "DELETE from exp_paciente where matricula_idpaciente=$matricula";
    
    if ($mysqli->query($consulta)){
          header("Location: ../index.php"); 										   
        }else{
 
        
    }
    
}else{     
      ?>
<script>
    alert("Error no se borro2");
     
</script>    

<?php

}

 