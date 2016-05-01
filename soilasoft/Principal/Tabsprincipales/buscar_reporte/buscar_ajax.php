<?php
include_once('../conexion/conexion.php');

$conexionSacadatos = new Conexion();
$mysqli = $conexionSacadatos->con();

$n_paciente=$_POST['n_paciente'];
$tipo_reporte=$_POST['tipo_reporte'];

if($tipo_reporte=="Lista_pacientes"){


 $consulta = "SELECT matricula_idpaciente, usuario, apellidos, nombre, fecha_nac, edad, sexo, direccionactual, ciudad, estado, codigopostal, estadocivil, ocupacion, exp_paciente.correo, celular, telcasa, alergia, exp_paciente.id_odontologo FROM exp_paciente, admin where exp_paciente.id_odontologo=admin.id_odontologo and exp_paciente.nombre LIKE '%".$n_paciente."%'";
$resultado = $mysqli->query($consulta);


 echo "<table id='tabla_ajax' class='table table-striped table-hover '>
<span id='liveclock' style='position:absolute;left:0;top:0;'></span>
       <thead>
          <legend>Reporte Lista Pacientes</legend>
     <tr>
     <th>Odontologo</th>
      <th>ID | Paciente</th>
  <th>Fecha nac | Edad</th>
      <th>Contactos</th>
      <th>Dirección Actual</th>
      <th>Estado | Ciudad</th>
      <th>Ocupación</th>
      <th>CP</th>   
      <th>Alergias</th>
            
    </tr>";

while ($fila = $resultado->fetch_row()) {
echo "<tr>
        <td><small>".$fila[0]."</small></td>
       
        <td><small>".$fila[1],"&nbsp;<br>|&nbsp;",$fila[2],"<br>&nbsp;",$fila[3]."</small></td>
        <td><small>".$fila[4]."</small></td>
       <td><small>".$fila[5]."</small></td>
        <td><small>".$fila[6]."</small></td> 
        <td><small>".$fila[7]."</small></td>  
        <td><small>".$fila[8]."</small></td>
        <td><small>".$fila[9]."</small></td>
         <td><small>".$fila[10]."</small></td>
          <td><small>".$fila[11]."</small></td>
        <td><small>".$fila[12]."</small></td>
       <td>
</tr>";    
 
}
echo "</table>";
}//fin de if lista Lista_pacientes

if($tipo_reporte=="Lista_consultas"){


 $consulta = "SELECT  usuario, consulta.matricula_idpaciente, exp_paciente.apellidos, exp_paciente.nombre, tipo_paciente, fecha_hora, costo_tratamiento, abono_tratamiento, saldo_tratamiento, motivo_consulta,observaciones, tipo_financiamiento, nominaotro FROM exp_paciente, admin,consulta  where admin.id_odontologo=consulta.id_odontologo and exp_paciente.matricula_idpaciente=consulta.matricula_idpaciente AND exp_paciente.nombre LIKE '%".$n_paciente."%'";
$resultado = $mysqli->query($consulta);


 echo "<table id='tabla_ajax' class='table table-striped table-hover '>
<span id='liveclock' style='position:absolute;left:0;top:0;'></span>
       <thead>
          <legend>Reporte Lista Pacientes</legend>
     <tr>
     <th>Odontologo</th>
      <th>ID | Paciente</th>
  <th>Tipo</th>
      <th>Fecha | Hora</th>
      <th>Costo Trat.</th>
      <th>Abono Trat.</th>
      <th>Saldo Trat.</th>
      <th>Motivo</th>   
      <th>Observaciones</th>
       <th>Tipo Financ.</th>  
        <th>Nómina u Otro</th>    
    </tr>";

while ($fila = $resultado->fetch_row()) {
echo "<tr>
        <td><small>".$fila[0]."</small></td>
       
        <td><small>".$fila[1],"&nbsp;<br>|&nbsp;",$fila[2],"<br>&nbsp;",$fila[3]."</small></td>
        <td><small>".$fila[4]."</small></td>
       <td><small>".$fila[5]."</small></td>
        <td><small>".$fila[6]."</small></td> 
        <td><small>".$fila[7]."</small></td>  
        <td><small>".$fila[8]."</small></td>
        <td><small>".$fila[9]."</small></td>
         <td><small>".$fila[10]."</small></td>
          <td><small>".$fila[11]."</small></td>
        <td><small>".$fila[12]."</small></td>
       <td>
</tr>";    
 
}
echo "</table>";
}//fin de if lista Lista_pacientes

if($tipo_reporte=="Lista_citas"){


 $consulta = "SELECT  usuario, consulta.matricula_idpaciente, exp_paciente.apellidos, exp_paciente.nombre, tipo_paciente, fecha_hora, costo_tratamiento, abono_tratamiento, saldo_tratamiento, motivo_consulta,observaciones, tipo_financiamiento, nominaotro FROM exp_paciente, admin,consulta  where admin.id_odontologo=consulta.id_odontologo and exp_paciente.matricula_idpaciente=consulta.matricula_idpaciente AND exp_paciente.nombre LIKE '%".$n_paciente."%'";
$resultado = $mysqli->query($consulta);


 echo "<table id='tabla_ajax' class='table table-striped table-hover '>
<span id='liveclock' style='position:absolute;left:0;top:0;'></span>
       <thead>
          <legend>Reporte Lista Pacientes</legend>
     <tr>
     <th>Odontologo</th>
      <th>ID | Paciente</th>
  <th>Fecha nac | Edad</th>
      <th>Contactos</th>
      <th>Dirección Actual</th>
      <th>Estado | Ciudad</th>
      <th>Ocupación</th>
      <th>CP</th>   
      <th>Alergias</th>
            
    </tr>";

while ($fila = $resultado->fetch_row()) {
echo "<tr>
        <td><small>".$fila[0]."</small></td>
       
        <td><small>".$fila[1],"&nbsp;<br>|&nbsp;",$fila[2],"<br>&nbsp;",$fila[3]."</small></td>
        <td><small>".$fila[4]."</small></td>
       <td><small>".$fila[5]."</small></td>
        <td><small>".$fila[6]."</small></td> 
        <td><small>".$fila[7]."</small></td>  
        <td><small>".$fila[8]."</small></td>
        <td><small>".$fila[9]."</small></td>
         <td><small>".$fila[10]."</small></td>
          <td><small>".$fila[11]."</small></td>
        <td><small>".$fila[12]."</small></td>
       <td>
</tr>";    
 
}
echo "</table>";
}//fin de if lista Lista_pacientes


if($tipo_reporte=="Busqueda_inicio"){


 echo "<table class='table table-striped table-hover '>
       <span id='liveclock' style='position:absolute;left:0;top:0;'></span>  
<thead>
     <tr>
     <th>Odontologo</th>
      <th>ID | Paciente</th>
  <th>Fecha nac | Edad</th>
      <th>Contactos</th>
      <th>Dirección Actual</th>
      <th>Estado | Ciudad</th>
      <th>Ocupación</th>
      <th>CP</th>   
      <th>Alergias</th>
    <th>Opciones</th>         
    </tr>
      </thead>
<tbody>";
 

    $consulta ="SELECT matricula_idpaciente, usuario, apellidos,   nombre, fecha_nac, edad, sexo, direccionactual, ciudad, estado, codigopostal, estadocivil, ocupacion, exp_paciente.correo, celular, telcasa, alergia, exp_paciente.id_odontologo  
    FROM exp_paciente, admin 
    WHERE exp_paciente.id_odontologo=admin.id_odontologo
    AND exp_paciente.nombre LIKE '%".$n_paciente."%'";
    $final=$mysqli->query($consulta);
    $iniciar=0;
    while($fila=$final->fetch_row()){        
        
    if ($iniciar%2==0){
        $estilo="";
    }else{
        $estilo="active";
    }
        
  echo "<tr class=".$estilo.">";
  echo "<td><small>".$fila[1]."</small></td>
        <td><small>".$fila[0],"&nbsp;<br>|&nbsp;",$fila[3],"<br>&nbsp;",$fila[2]."</small></td>
        <td><small>".$fila[4],"&nbsp;|&nbsp;<em>",$fila[5],"</em"."</small></td>
        <td><small>".$fila[13],"&nbsp;<br>|<em>&nbsp;Cel.",$fila[14],"</em".";<em>&nbsp;<br>| Tel.",$fila[15],"</em"." </small></td>
        <td><small>".$fila[7]."</small></td> 
        <td><small>".$fila[9],"&nbsp;|&nbsp;<em>",$fila[8],"</em"."</small></td> 
        <td><small>".$fila[12]."</small></td>
        <td><small>".$fila[10]."</small></td>
        <td><small>".$fila[16]."</small></td>";
       echo "<td>";
        
    //echo "<a href='index.php?eliminar=$fila[0]' class='btn btn-danger btn-default btn-xs'>Eliminar</a>";  
     
        
      /*  echo'<a   href=Tabsprincipales/editarpaciente.php?eliminar=$fila[0]&name=borrar  class="btn btn-danger btn-default btn-xs">Eliminar</a>';*/
    echo '<a name="editar"  data-toggle="modal" data-target="#myModal" href="Tabsprincipales/modal_paciente/modal_delete_paciente.php?id_paciente='.$fila[0].'" class="modalLoad btn btn-danger btn-default btn-xs">Eliminar</a>';
        
        
      echo '<a name="editar"  data-toggle="modal" data-target="#myModal" href="Tabsprincipales/modal_paciente/modal_paciente.php?id_paciente='.$fila[0].'" class="modalLoad btn btn-success btn-default btn-xs">Editar</a>';
                   
             

        echo "</tr>
          </tbody>";
        $iniciar++;
    }
 
    
    
     echo "</table>";
}//termina if buscar_inicio


?>