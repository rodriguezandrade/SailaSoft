<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
 
<?php
include("../encabezado.php");
include("conexion/conexion.php");
mysql_connect("localhost","root","");
mysql_select_db("soilasoft");
  $sql="SELECT * FROM admin";
  $rec=mysql_query($sql);
$sql2="SELECT * FROM exp_paciente";
$rec2=mysql_query($sql2);
?>
<script>
function solonumeros(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // al meter datosentrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    
    tecla_final = String.fromCharCode(tecla);
    
    return patron.test(tecla_final); 
}   
    
    
    
</script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>


 <form method="POST" action="registrarcita.php" class="form-inline col-md-6 col-md-offset-3">
     <h4>Nueva Cita</h4>
  <fieldset>
    <legend>Detalle de cita</legend>
     <div class="row">
   
  <div class="col-xs-4 inline">
       <label class=" .col-xs-4 control-label">Odontologo</label>
       <div class=" .col-xs-4 control-label">
          <select class="form-control" placeholder="Odontologo" id="select" name="id_odontologo">
            
            
            <?php while($row=mysql_fetch_array($rec)){ ?>   
               <option value="<?php  echo $row['id_odontologo'] ?>"> <?php  echo $row['nombre_completo']  ?> </option>";
           <?php } ?>
  </select>
          <br>
      </div>   
    
  </div>
         
         
      
         
         <div class="col-xs-4 inline">
       <label class=" .col-xs-4 control-label">Paciente</label>
       <div class=".col-xs-4 control-label">
        <select class="form-control"   id="select" name="matricula_idpaciente">
            <?php while($row2=mysql_fetch_array($rec2)){ ?>   
               <option value="<?php echo $row2['matricula_idpaciente'] ?>"> <?php  echo $row2['nombre']  ?> </option>";
           <?php } ?>
  </select>
          <br>
      </div> 
    
  </div>
      <input type="hidden" name="matricula" value="<?php  $row2['matricula_idpaciente'] ?>">
               
         
           <div class="col-xs-4 inline">
       <label class=" .col-xs-4 control-label">Fecha y Hora</label>
         <input name="fechahora" type="datetime-local" class="form-control"   >
    <br> <br> 
  </div>
  
</div>
  </fieldset>
     <br>
      <div class=" footer">
                        <button type="submit" id="cancelar" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" id="btn_enviar"  >Agendar Cita</button>
                      </div>
    
</form>



 <?php 
 /*include("../pie.php");*/
?>  
