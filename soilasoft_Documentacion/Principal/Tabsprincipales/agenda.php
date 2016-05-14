/**
 * Saila Soft
 * @author Jonathan Rodriguez
 * @version 1.0 
 */ 


<?php
/*
require_once 'conexion/conexion.php';
*/
  require_once ('conexion/conexion.php');
$conexionSacadatos = new Conexion();
$mysqli = $conexionSacadatos->con();

?>
<ul class="nav nav-tabs">
  <li class="active">
      <a href="#citas" data-toggle="tab" aria-expanded="true"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp;Lista de Citas</a>
 </li>
     <li class="dropdown">
    <div class="btn-group">
   <a  class="btn btn-success" href="tabsprincipales/nuevacita.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Nueva Cita</a>
      </div>
       </li>
      <li class="">
      <a href="#consulta" data-toggle="tab" ><span class="glyphicon glyphicon-file" aria-hidden="true"></span>&nbsp;Lista de Consultas</a>  
      
 </li>
      <li class="dropdown">
 <?php 
/*include("modalnuevacita.php");*/
?> 
   <div class="btn-group">
 
  <a name="btn_nuevaconsulta"  data-toggle="modall" data-target="#myModali" href="Tabsprincipales/modal_consulta/modal_consulta.php" class="modalLoadd btn btn-warning"><span class="glyphicon glyphicon-copy" aria-hidden="true"></span>&nbsp;Nueva Consulta</a>
 

 <!--<    <script type="text/javascript">
 
$(document).ready(function(){
  $('.modalLoadd').click(function() { 
    $('#myModali').modal('show'); 
    $('.modal-content').val('');
    $('.modal-content').load($(this).attr('href'));
     return false;

  });

});
    
  
</script>
       
       
       
     

  <div class="modal fade" id="myModali" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        </div> <!--/.modal-content-->
  <!--     </div>     <!-- /.modal-dialog -->
      </div> <!-- /.modal -->
     

 <div id="  tabla_normal2" class="box-body table-responsive no-padding">      
       
       
      </div>
       </li>
</ul>
<div id="myTabContent" class="tab-content">
        <div class="tab-pane fade  active in" id="citas">   
   <table class="table table-striped table-hover ">
       <span id="liveclock" style="position:absolute;left:0;top:0;"></span>  
  <thead>
    <tr>
      <th>#</th>
      <th>Paciente</th>
      <th>Fecha | Hora</th>
      <th>Doctor</th>
    </tr>
  </thead>
  <tbody>
   <?php
    $sql="select admin.usuario,agenda.id_agenda,agenda.matricula_idpaciente,exp_paciente.nombre, exp_paciente.apellidos, agenda.fecha_hora  FROM agenda,admin,exp_paciente WHERE admin.id_odontologo=agenda.id_odontologo AND agenda.matricula_idpaciente=exp_paciente.matricula_idpaciente";
    
    
    $final=$mysqli->query($sql);
     $iniciar=0;
    while($fila=$final->fetch_row()){
    if ($iniciar%2==0){
        $estilo="";
    }else{
        $estilo="active";
    }
        
  echo "<tr class=".$estilo.">";
  echo "<td><small>".$fila[1]."</small></td>
        <td><small>".$fila[2],"&nbsp;<br>|&nbsp;",$fila[4],"<br>&nbsp;",$fila[3]."</small></td>
        <td><small>".$fila[5]."</small></td>
        <td><small>".$fila[0]." </small></td>";
       echo "<td>";
     echo'<a href=Tabsprincipales/editarpaciente.php?eliminar="'.$fila[0].'"  class="btn btn-danger btn-default btn-xs">Eliminar</a>';
        
      echo' <a data-toggle="modal" data-target="#myModal" href="Tabsprincipales/modificarmodalpaciente.php?id_paciente='.$fila[0].'" class="modalLoad btn btn-success btn-default btn-xs">Editar</a>';
                   
             

        echo "</tr>
          </tbody>";
        $iniciar++;
    }
   
    ?>
  </tbody>
</table> 
</div>
    <div class="tab-pane fade" id="consulta">
    <table class="table table-striped table-hover ">
       <span id="liveclock" style="position:absolute;left:0;top:0;"></span>  
<thead>
     <tr>
      <th>Odontólogo</th>
      <th>ID | Paciente</th>
      <th>Tip. Paciente</th>
      <th>Fecha | Hora</th>
      <th>Cost. Tratamiento</th>
      <th>Abon. Tratamiento</th>
      <th>Sald. Tratamiento</th>
      <th>Motivo</th>   
      <th>Observ.</th>
      <th>Tipo Financia.</th>   
      <th>Nómina u Otro</th>  
      <th>Opciones</th> 
    </tr>
      </thead>
<tbody>
    <?php
    $sql="select admin.usuario,consulta.matricula_idpaciente,exp_paciente.nombre, exp_paciente.apellidos,tipo_paciente,fecha_hora,costo_tratamiento,abono_tratamiento,saldo_tratamiento,motivo_consulta,observaciones,tipo_financiamiento,nominaotro FROM admin,exp_paciente,consulta WHERE exp_paciente.matricula_idpaciente=consulta.matricula_idpaciente and admin.id_odontologo=consulta.id_odontologo";
    
    
    $final=$mysqli->query($sql);
     $iniciar=0;
    while($fila=$final->fetch_row()){
        
        
    if ($iniciar%2==0){
        $estilo="";
    }else{
        $estilo="active";
    }
 echo "<tr class=".$estilo.">";
  echo "<td><small>".$fila[0]."</small></td>
        <td><small>".$fila[1],"&nbsp;<br>|&nbsp;",$fila[3],"<br>&nbsp;",$fila[2]."</small></td>
        <td><small>".$fila[4]."</small></td>
        <td><small>".$fila[5]." </small></td> 
        <td><small>".$fila[6]."</small></td> 
         <td><small>".$fila[7]."</small></td> 
        <td><small>".$fila[8]."</small></td>
        <td><small>".$fila[9]."</small></td>
         <td><small>".$fila[10]."</small></td>
          <td><small>".$fila[11]."</small></td>
           
        <td><small>".$fila[12]."</small></td>";
       echo "<td>";
     echo'<a href=Tabsprincipales/editarpaciente.php?eliminar="'.$fila[0].'"  class="btn btn-danger btn-default btn-xs">Eliminar</a>';
        
      echo' <a data-toggle="modal" data-target="#myModal" href="Tabsprincipales/modificarmodalpaciente.php?id_paciente='.$fila[0].'" class="modalLoad btn btn-success btn-default btn-xs">Editar</a>';
                   
             

        echo "</tr>
          </tbody>";
        $iniciar++;
    }
   
    ?>
        </tbody>
        </table>
  </div>
    
    
</div>


