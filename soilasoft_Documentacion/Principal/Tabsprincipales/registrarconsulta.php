/**
 * Saila Soft
 * @author Jonathan Rodriguez
 * @version 1.0 
 */  
<?php
require("conexion/conexion.php");

 $conexionSacadatos = new Conexion();
        $mysqli = $conexionSacadatos->con();
$id_odontologo=$_POST['id_odontologo'];
$matri=$_POST["matricula_idpaciente"]; 
$tipopaciente=$_POST["tipopac"];
$fecha_hora = $_POST["fechahora"]; 
$costotrat = $_POST["costo_tratamiento"];   
$abonotrat = $_POST["abono_tratamiento"]; 
$saldotrat = $_POST["saldo_tratamiento"]; 
$motivo = $_POST["motivo"]; 
$observa = $_POST["observaciones"]; 
$tipofinanza = $_POST["tipofinanza"];
$nominaotro = $_POST["nominaotro"];
/*
echo $id_odontologo;
echo $matri;
echo $tipopaciente;
echo $fecha_hora;
echo $costotrat;
echo $abonotrat;
echo $saldotrat;
echo $motivo;
echo $observa;
echo $tipofinanza;
echo $nominaotro;

  */

$query="INSERT INTO consulta(id_odontologo,matricula_idpaciente,idconsulta,tipo_paciente,fecha_hora,costo_tratamiento,abono_tratamiento,saldo_tratamiento, motivo_consulta,observaciones,tipo_financiamiento,nominaotro)VALUES('$id_odontologo','$matri','','$tipopaciente','$fecha_hora','$costotrat','$abonotrat','$saldotrat','$motivo','$observa','$tipofinanza','$nominaotro')";

$resultado=$mysqli->query($query);
 ?>
 <script>
 hacer_click(); 
 </script> 
<?php
 
header("location:../index.php");
?>





 

