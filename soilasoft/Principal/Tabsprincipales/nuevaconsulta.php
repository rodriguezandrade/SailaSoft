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


 <form method="POST" action="registrarconsulta.php" class="form-inline col-md-6 col-md-offset-3">
     <h4>Nueva Consulta</h4>
  <fieldset>
    <legend>Principales</legend>
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
       <label class=" .col-xs-4 control-label">Tipo de Paciente</label>
       <div class=".col-xs-4 control-label">
        <select name="tipopac"class="form-control" id="select">
          <option>Estudiante</option>
          <option>Empleado</option>
          <option>Otro</option>
          </select>
          <br>
      </div> 
    
  </div>
         
           <div class="col-xs-4 inline">
       <label class=" .col-xs-4 control-label">Fecha y Hora</label>
         <input name="fechahora" type="datetime-local" class="form-control"   >
    <br> <br> 
  </div>
         
         <div class="col-xs-4 inline">
  <label class=".col-xs-4 control-label"
         for="inputSmall">Costo Tratamiento</label>
               <div class="input-group">
         <span class="input-group-addon">$</span>
  <input name="costo_tratamiento" class="form-control " type="text" id="inputSmall">
</div>
         </div>
         
          <div class="col-xs-4 inline">
  <label class=".col-xs-4 control-label"
         for="inputSmall">Abono Tratamiento</label>
               <div class="input-group">
         <span class="input-group-addon">$</span>
  <input name="abono_tratamiento" class="form-control " type="text" id="inputSmall">
</div>
         </div>
         
 <div class="col-sm-4">
  <label class=".col-md-4 control-label"
         for="inputSmall">Saldo Tratamiento</label>
               <div class="input-group">
         <span class="input-group-addon">$</span>
  <input name="saldo_tratamiento" class="form-control " type="text" id="inputSmall">
</div>
    </div>
        
      
        <div  class="col-xs-4 ">
  <label class=".col-xs-4 control-label"
         for="inputSmall">Motivo de Consulta</label>
               <textarea name="motivo" class="form-control" rows="2" id="textArea"></textarea>
        <span class="help-block">Detalle el motivo de la consulta.</span>
         </div>
         
         
          
        <div class="col-xs-4  ">
  <label class=".col-xs-4 control-label"
         for="inputSmall">Observaciones</label>
               <textarea name="observaciones" class="form-control" rows="2" id="textArea"></textarea>
        <span class="help-block">Algunas Observaciones previstas.</span>
         </div>
           
          
         <div class="col-sm-4">
       <label class=".col-md-4 control-label">Tipo de Financiamiento</label>
       <div class=".col-xs-4  control-label">
        <select name="tipofinanza"class="form-control" id="edition" onchange="func()">
          <option value="none" selected  > Gratuito</option> 
          <option >Efectivo</option>
          <option  id="1">Nómina</option>
            <option id="2">Otro</option>
          </select>
          <br>
      </div>
             <div id="trhide"style='display:none;'  >
              <label class=".col-md-4 control-label">Detalle</label>
      <div class=".col-md-4">
     
        <input type="text" name="nominaotro"  class="form-control sucsess" id="uno" placeholder="Empleado u Otro"    >
          <br>  
      </div>
             </div>
            
              
             
            
  </div>
 

<script type="text/javascript">
 function func() {
   var elem = document.getElementById("edition");

   if(elem.value == "Nómina") {
      document.getElementById("trhide").style.display = 'block'; 
   } else if (elem.value == "Otro") {
     document.getElementById("trhide").style.display = 'block'; 
   }
     else{
         document.getElementById("trhide").style.display = 'none';
     }
 }
</script>
         
 
</div>
  </fieldset>
     <br>
       
        
         <div class=" footer">
                        <button type="submit" id="cancelar" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" id="btn_enviar"  >Guardar Cambios</button>
                      </div>
    
</form>



 <?php 
 /*include("../pie.php");*/
?>  
