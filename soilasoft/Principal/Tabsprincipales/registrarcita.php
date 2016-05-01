 
<?php
require("conexion/conexion.php");
$id_odontologo=$_POST['id_odontologo'];
$matri=$_POST["matricula_idpaciente"]; 
$fecha_hora = $_POST["fechahora"]; 
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

$query="INSERT INTO agenda(id_odontologo,id_agenda,matricula_idpaciente, fecha_hora )VALUES('$id_odontologo', '','$matri','$fecha_hora')";

$resultado=$mysqli->query($query);
 ?>
 <script>
 hacer_click(); 
 </script> 
<?php
 
header("location:../index.php");
?>





 

