


<?php
 
include_once('conexion/conexion.php');


class  Tablas{
 public $paciente;
 public $tipo;
 

function __construct($paciente,$tipo)
	{
 $this->paciente=$paciente;
 $this->tipo=$tipo;
	}
    
    function listacitas()
    {   
  $conexionSacadatos = new Conexion();
$mysqli = $conexionSacadatos->con();
if ($this->paciente!=="" && $this->tipo=="Lista Citas"){
 $consulta = "SELECT  usuario, consulta.matricula_idpaciente, exp_paciente.apellidos, exp_paciente.nombre, tipo_paciente, fecha_hora, costo_tratamiento, abono_tratamiento, saldo_tratamiento, motivo_consulta,observaciones, tipo_financiamiento, nominaotro FROM exp_paciente, admin,consulta  where admin.id_odontologo=consulta.id_odontologo and exp_paciente.matricula_idpaciente=consulta.matricula_idpaciente AND exp_paciente.nombre='$this->paciente'";
}else{
    $consulta = "SELECT  usuario, consulta.matricula_idpaciente, exp_paciente.apellidos, exp_paciente.nombre, tipo_paciente, fecha_hora, costo_tratamiento, abono_tratamiento, saldo_tratamiento, motivo_consulta,observaciones, tipo_financiamiento, nominaotro FROM exp_paciente, admin,consulta  where admin.id_odontologo=consulta.id_odontologo and exp_paciente.matricula_idpaciente=consulta.matricula_idpaciente";
}
$resultado = $mysqli->query($consulta);
$i=0;
    while ($fila = $resultado->fetch_row()) {
echo "<tr>";
 echo "<td><small>".$fila[0]."</small></td>
       
        <td><small>".$fila[1],"&nbsp;<br>|&nbsp;",$fila[2],"<br>&nbsp;",$fila[3]."</small></td>
        <td><small>".$fila[4]."</small></td>
       <td><small>".$fila[5]."</small></td>
        <td><small>".$fila[6]."</small></td> 
        <td><small>".$fila[7]."</small></td>  
        <td><small>".$fila[8]."</small></td>
        <td><small>".$fila[9]."</small></td>
         <td><small>".$fila[10]."</small></td>
          <td><small>".$fila[11]."</small></td>
        <td><small>".$fila[12]."</small></td>";
       echo "<td>";
echo "</tr>";    
 $i++;
}
echo "</table>"; }
 function listaconsultas()
  { $conexionSacadatos = new Conexion();
$mysqli = $conexionSacadatos->con();
if ($this->paciente!=="" && $this->tipo=="Lista Consultas"){
 $consulta = "SELECT  usuario, consulta.matricula_idpaciente, exp_paciente.apellidos, exp_paciente.nombre, tipo_paciente, fecha_hora, costo_tratamiento, abono_tratamiento, saldo_tratamiento, motivo_consulta,observaciones, tipo_financiamiento, nominaotro FROM exp_paciente, admin,consulta  where admin.id_odontologo=consulta.id_odontologo and exp_paciente.matricula_idpaciente=consulta.matricula_idpaciente AND exp_paciente.nombre='$this->paciente'";
}else{
    $consulta = "SELECT  usuario, consulta.matricula_idpaciente, exp_paciente.apellidos, exp_paciente.nombre, tipo_paciente, fecha_hora, costo_tratamiento, abono_tratamiento, saldo_tratamiento, motivo_consulta,observaciones, tipo_financiamiento, nominaotro FROM exp_paciente, admin,consulta  where admin.id_odontologo=consulta.id_odontologo and exp_paciente.matricula_idpaciente=consulta.matricula_idpaciente";
}
$resultado = $mysqli->query($consulta);
$i=0;
    while ($fila = $resultado->fetch_row()) {
echo "<tr>";
 echo "<td><small>".$fila[0]."</small></td>
       
        <td><small>".$fila[1],"&nbsp;<br>|&nbsp;",$fila[2],"<br>&nbsp;",$fila[3]."</small></td>
        <td><small>".$fila[4]."</small></td>
       <td><small>".$fila[5]."</small></td>
        <td><small>".$fila[6]."</small></td> 
        <td><small>".$fila[7]."</small></td>  
        <td><small>".$fila[8]."</small></td>
        <td><small>".$fila[9]."</small></td>
         <td><small>".$fila[10]."</small></td>
          <td><small>".$fila[11]."</small></td>
        <td><small>".$fila[12]."</small></td>";
       echo "<td>";
echo "</tr>";    
 $i++;
}
echo "</table>";
}

  public function listapacientes(){
            $conexionSacadatos = new Conexion();
            $mysqli = $conexionSacadatos->con();
            if ($this->paciente!=="" && $this->tipo=="Lista Pacientes"){
             $consulta = "SELECT matricula_idpaciente, usuario, apellidos, nombre, fecha_nac, edad, sexo, direccionactual, ciudad, estado, codigopostal, estadocivil, ocupacion, exp_paciente.correo, celular, telcasa, alergia, exp_paciente.id_odontologo FROM exp_paciente, admin where exp_paciente.id_odontologo=admin.id_odontologo and exp_paciente.nombre='$this->paciente'";
            }else{
                $consulta = "SELECT matricula_idpaciente, usuario, apellidos, nombre, fecha_nac, edad, sexo, direccionactual, ciudad, estado, codigopostal, estadocivil, ocupacion, exp_paciente.correo, celular, telcasa, alergia, exp_paciente.id_odontologo FROM exp_paciente, admin where exp_paciente.id_odontologo=admin.id_odontologo ";
            }
            $resultado = $mysqli->query($consulta);
            $i=0;
                while ($fila = $resultado->fetch_row()) {

            echo "<tr>";
             echo "<td><small>".$fila[1]."</small></td>
                    <td><small>".$fila[0],"&nbsp;<br>|&nbsp;",$fila[2],"<br>&nbsp;",$fila[3]."</small></td>
                    <td><small>".$fila[4],"&nbsp;|&nbsp;<em>",$fila[5],"</em"."</small></td>
                    <td><small>".$fila[13],"&nbsp;<br>|<em>&nbsp;Cel.",$fila[14],"</em".";<em>&nbsp;<br>| Tel.",$fila[15],"</em"." </small></td>
                    <td><small>".$fila[7]."</small></td> 
                     <td><small>".$fila[9],"&nbsp;|&nbsp;<em>",$fila[8],"</em"."</small></td> 
                    <td><small>".$fila[12]."</small></td>
                    <td><small>".$fila[10]."</small></td>
                    <td><small>".$fila[16]."</small></td>";
                   echo "<td>";
            echo "</tr>";    
             $i++;
            }
            echo "</table>";
            }

}

 
?>