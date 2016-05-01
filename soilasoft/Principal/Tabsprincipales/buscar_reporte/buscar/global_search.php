<?php
 include_once('../../conexion/conexion.php');
        $conexionSacadatos = new Conexion();
        $mysqli = $conexionSacadatos->con();
// Here, we will get user input data and trim it, if any space in that user input data
$buscar = trim($_REQUEST['term']);


// Define two array, one is to store output data and other is for display
$display_json = array();
$json_arr = array();
 

$buscar = preg_replace('/\s+/', ' ', $buscar);



  $query = "SELECT matricula_idpaciente, usuario, apellidos, nombre, fecha_nac, edad, sexo, direccionactual, ciudad, estado, codigopostal, estadocivil, ocupacion, exp_paciente.correo, celular, telcasa, alergia, exp_paciente.id_odontologo FROM exp_paciente, admin where exp_paciente.id_odontologo=admin.id_odontologo and exp_paciente.nombre LIKE '%".$buscar."%'";

$result_fila = $mysqli->query($query) or die ($mysqli->error);
$filas = $result_fila->num_rows;

if($filas>0){
while($result = mysqli_fetch_array($result_fila)) {
  $json_arr["id"] = $result['nombre'];
  $json_arr["value"] = $result['nombre'];
  $json_arr["label"] =$result['nombre'];
  
  array_push($display_json, $json_arr);
}
} else {
  $json_arr["id"] = "";
  $json_arr["value"] = "";
  $json_arr["label"] = "Resultado No encontrado!";
 
  array_push($display_json, $json_arr);
}
 
	
$jsonWrite = json_encode($display_json); //encode that search data
 echo $jsonWrite;
?>