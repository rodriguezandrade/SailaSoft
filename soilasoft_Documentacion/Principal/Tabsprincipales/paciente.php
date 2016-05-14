
/**
 * Saila Soft
 * @author Jonathan Rodriguez
 * @version 1.0 
 */ 
<br>
<a name="editar"  data-toggle="modal" data-target="#myModal" href="Tabsprincipales/modal_paciente/modal_paciente.php" class="modalLoad btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp;Nuevo Paciente</a>

<script type="text/javascript">

$(document).ready(function(){
  $('.modalLoad').click(function() { 
    $('#myModal').modal('show'); 
    $('.modal-content').val('');
    $('.modal-content').load($(this).attr('href'));
     return false;

  });

});
    
  
</script>

 
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->
    

 <div id="tabla_normal" class="box-body table-responsive no-padding">      
       

 <table class="table table-striped table-hover ">
       <span id="liveclock" style="position:absolute;left:0;top:0;"></span>  
<thead>
     <tr>
         <br>
     <th>Odontólogo</th>
      <th>ID | Paciente</th>
  <th>Fecha nac | Edad</th>
      <th>Contactos</th>
      <th>Dirección Actual</th>
      <th>Estado | Ciudad</th>
      <th>Ocupación</th>
      <th>CP</th>   
      <th>Alergias</th>
    <th><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;Opciones</th>         
    </tr>
      </thead>
<tbody>
    
<?php
    require_once ('conexion/conexion.php');
    $conexionSacadatos = new Conexion();
    $mysqli = $conexionSacadatos->con();

    $sql ="SELECT matricula_idpaciente, usuario, apellidos,   nombre, fecha_nac, edad, sexo, direccionactual, ciudad, estado, codigopostal, estadocivil, ocupacion, exp_paciente.correo, celular, telcasa, alergia, exp_paciente.id_odontologo  
    FROM exp_paciente, admin 
    where exp_paciente.id_odontologo=admin.id_odontologo";
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
    echo '<a name="editar"  data-toggle="modal" data-target="#myModal" href="Tabsprincipales/modal_paciente/modal_delete_paciente.php?id_paciente='.$fila[0].'" class="modalLoad btn btn-danger btn-default btn-xs"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;Eliminar</a>';
        
        
      echo '&nbsp;<a name="editar"  data-toggle="modal" data-target="#myModal" href="Tabsprincipales/modal_paciente/modal_paciente.php?id_paciente='.$fila[0].'" class="modalLoad btn btn-success btn-default btn-xs"> <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>&nbsp;Editar</a>';
                   
             

        echo "</tr>
          </tbody>";
        $iniciar++;
    }
 
    ?>
    
     </table>   

</div>    
    
      
<div id="tabla_ajax" class="box-body table-responsive no-padding">      

</table> 
       
     

 
