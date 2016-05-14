<?php
require_once ('../conexion/conexion.php');
$conexionSacadatos = new Conexion();
$mysqli = $conexionSacadatos->con();
$sql="SELECT * FROM admin";
$resultado1 = $mysqli->query($sql) or die ($mysqli->error);
$sql2="SELECT * FROM exp_paciente";
$result= $mysqli->query($sql2) or die ($mysqli->error);


?>
 
 

    <div class="modal-content">

        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Editar una Consulta</h4>
                      </div>
                      <div class="modal-body">
                        <h4>Datos del Consulta</h4>
                          
    
  <fieldset>
    <legend>Consulta</legend>
          
     <div class="col-xs-4 inline">
       <label class=" .col-xs-4 control-label">Odontologo</label>
       <div class=" .col-xs-4 control-label">
          <select class="form-control" placeholder="Odontologo" id="select" name="id_odontologo">
          <?php    while($row = mysqli_fetch_array($resultado1)){  ?> 
                <option value="<?php  echo $row['id_odontologo']?>"> <?php  echo $row['nombre_completo'] ?> </option>
    <?php } ?>
       </select>
          <br>
      </div>   
    
  </div>
       <div class="col-xs-4 inline">
       <label class=" .col-xs-4 control-label">Paciente</label>
       <div class=".col-xs-4 control-label">
        <select class="form-control"   id="select" name="matricula_idpaciente">
            
              <?php while($row2=mysqli_fetch_array($result)){ ?>   
               <option value="<?php echo $row2['matricula_idpaciente'] ?>"> <?php  echo $row2['nombre'] ?> </option>
           <?php } ?>
  </select>
          <br>
      </div> 
    
  </div>
    
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
  <label class=".col-xs-4 control-label" >Costo Tratamiento</label>
               <div class="input-group">
         <span class="input-group-addon">$</span>
  <input name="costo_tratamiento" class="form-control " type="number"  >
</div>
         </div>
         
          <div class="col-xs-4 inline">
  <label class=".col-xs-4 control-label"
         for="inputSmall">Abono Tratamiento</label>
               <div class="input-group">
         <span class="input-group-addon">$</span>
  <input name="abono_tratamiento" class="form-control " type="number" id="inputSmall">
</div>
         </div>
         
 <div class="col-sm-4">
  <label class=".col-md-4 control-label"
         for="inputSmall">Saldo Tratamiento</label>
               <div class="input-group">
         <span class="input-group-addon">$</span>
  <input name="saldo_tratamiento" class="form-control " type="number" id="inputSmall">
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
       
        
         <div class="modal-footer">
                        <button type="submit" id="cancelar" class="btn btn-default" data-dismiss="modal">Cancelar</button>
             
    <?php 
    
             if(isset($_GET['id_paciente'])){
                 echo "<button value='1' id='button_actualizar'  class='btn btn-warning'  >Actualizar Cambios</button>";
                 
             }else{
                echo "<button value='1' id='button_guardar' class='btn btn-success'  >Guardar Paciente</button>";  
             }
             ?>
                        
        </div>
       <?php
  /*  require_once("registrarpaciente.php");
   if (isset($_POST["matricula"])){
$insertando=new  NuevoRegistropaciente($_POST["matricula"],$_POST["apellido"], $_POST["nombre"], $_POST["fecha"], $_POST["edad"], $_POST["sexo"], $_POST["direccion"], $_POST["estado"], $_POST["ciudad"], $_POST["cp"], $_POST["estadocivil"], $_POST["ocupacion"], $_POST["correo"], $_POST["celular"], $_POST["telcasa"], $_POST["alergia"], $_POST["id_odontologo"]);
$insertando->insertar();
 }*/
        ?>

                          
                  
</div>
        
        
    <script>
            $(document).ready(function(){
                //notificaciones
             /*   function guardar(){
                           $.notify({
                            icon: "soilamini.png",
                                title: '<strong>¡Guardado Satisfactoriamente!</strong>',
                            message: 'Paciente Resgistrado'       
                        },{
                          delay: 400,
                          icon_type: 'image',
                            type: 'success'
                        }); 
                    }  
                function error(){
                           $.notify({
                            icon: "soilamini.png",
                                title: '<strong>¡Error!</strong>',
                            message: 'Error al intentar conectar con el Servidor'       
                        },{
                          delay: 400,
                          icon_type: 'image',
                            type: 'danger'
                        }); 
                } */
///fin de notificaciones
                
             
                        
            $("#button_guardar").click(function(){
                var button="nuevo_paciente";
                
            
                //variables de inp
                           
                var id_odontologo = $("#id_odontologo").val();
                var matricula = $("#matricula").val();
                var apellidos=$("#apellidos").val();
                var nombre=$("#nombre").val();
                var f_nacimiento=$("#f_nacimiento").val();
                var edad=$("#edad").val();
                var sexo=$("#sexo").val();
               
                var direccion=$("#direccion").val();
                var estado=$("#estado").val();
                var ciudad=$("#ciudad").val();
                var cp=$("#cp").val();                
                var edo_civil=$("#edo_civil").val();
                var ocupacion=$("#ocupacion").val();
                var correo=$("#correo").val();
                var celular=$("#celular").val();
                var telcasa=$("#telcasa").val();
                var alergia=$("#alergia").val();
                
                
            var datastring="insert="+ button + "&id_odontologo="+ id_odontologo + "&matricula="+ matricula +"&apellidos="+ apellidos +"&nombre="+ nombre +"&f_nacimiento="+ f_nacimiento +"&edad="+ edad +"&sexo="+ sexo +"&direccion="+ direccion +"&estado="+ estado +"&ciudad="+ ciudad +"&cp="+ cp +"&edo_civil="+ edo_civil +"&ocupacion="+ ocupacion +"&correo="+ correo +"&celular="+ celular +"&telcasa="+telcasa +"&alergia="+ alergia;              
            
                
            $.ajax({
                        type:"POST",
                        url:"Tabsprincipales/modal_paciente/control_paciente.php",
                        data:datastring,
                success: function(resultado) {
                
                   window.location.assign("/soilasoft/Principal/index.php");
                }
                       });
                       });
                     
                $("#button_actualizar").click(function(){ 
                
                var button="actualizar_paciente";
                //variables de inp
                var id_odontologo = $("#id_odontologo").val();
                var matricula = $("#matricula").val();
                var apellidos=$("#apellidos").val();
                var nombre=$("#nombre").val();
                var f_nacimiento=$("#f_nacimiento").val();
                var edad=$("#edad").val();
                var sexo=$("#sexo").val();
                var direccion=$("#direccion").val();
                var estado=$("#estado").val();
                var ciudad=$("#ciudad").val();
                var cp=$("#cp").val();                
                var edo_civil=$("#edo_civil").val();
                var ocupacion=$("#ocupacion").val();
                var correo=$("#correo").val();
                var celular=$("#celular").val();
                var telcasa=$("#telcasa").val();
                var alergia=$("#alergia").val();
                
                 var datastring2="update="+ button + "&id_odontologo="+ id_odontologo + "&matricula="+ matricula +"&apellidos="+ apellidos +"&nombre="+ nombre +"&f_nacimiento="+ f_nacimiento +"&edad="+ edad +"&sexo="+ sexo +"&direccion="+ direccion +"&estado"+ estado +"&ciudad="+ ciudad +"&cp="+ cp +"&edo_civil="+ edo_civil +"&ocupacion="+ ocupacion +"&correo="+ correo +"&celular="+ celular +"&telcasa="+telcasa +"&alergia="+ alergia;
                
            $.ajax({
                    type:"POST",
                    url:"Tabsprincipales/modal_paciente/control_paciente.php",
                    data:datastring2,

                    success: function(resultado) {
                     window.location.assign("/soilasoft/Principal/index.php");
                
                    
                },
                error: function(resultado) {
                    
                }
                });
            });
        
                
            });
        
    </script>
        
       
        
        
        
        
  