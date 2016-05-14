/**
 * Saila Soft
 * @author Jonathan Rodriguez
 * @version 1.0 
 
 
  
    * variables publicas
    * @static apellido, nombre, fecha, edad, sexo, direccion, estado,ciudad
      cp, estado civil, ocupacion, correo, celular, telefono de casa, alergia, id del odontologo.

 */


<?php
require_once ('../conexion/conexion.php');
$conexionSacadatos = new Conexion();
$mysqli = $conexionSacadatos->con();
  if (isset($_GET['id_paciente'])){

          

    $consulta = "SELECT * FROM admin, exp_paciente 
    WHERE admin.id_odontologo=exp_paciente.id_odontologo 
    AND exp_paciente.matricula_idpaciente='".$_GET['id_paciente']."'";
    $resultado = $mysqli->query($consulta);
    $fila = $resultado->fetch_row();
    
    $id_odontologo = $fila[0];
    $matricula = $fila[5];
    $apellido =$fila[6];
    $nombre =$fila[7];
    $fecha=$fila[8];
    $edad = $fila[9];
    $sexo =$fila[10];
    $direccion = $fila[11];
    $estado = $fila[13];
    $ciudad =$fila[12];
    $cp =$fila[14];
    $estcivil = $fila[15];
    $ocupacion = $fila[16];
    $correo = $fila[17];
    $celular = $fila[18];
    $telcasa = $fila[19];
    $alergia = $fila[20]; 
    $id_odontologo=$fila[21]; 
      
    }else{
    $id_odontologo = "";
    $matricula = "";
    $apellido ="";
    $nombre ="";
    $fecha="";
    $edad = "";
    $sexo ="";
    $direccion = "";
    $estado = "";
    $ciudad ="";
    $cp ="";
    $estcivil = "";
    $ocupacion = "";
    $correo = "";
    $celular = "";
    $telcasa = "";
    $alergia = ""; 
    $id_odontologo=""; 
    }
 
?>





    <div class="modal-content">

        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;Editar un Paciente</h4>
                      </div>
                      <div class="modal-body">
                        <h4><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;Datos del Paciente </h4>
                          
    
  <fieldset>
    <legend>Principales</legend>
          
    <div class="form-group">
        
       
        
        <label for="select"    class="col-lg-2 control-label">Odontologo</label>
      <div class="col-lg-10">
        <select class="form-control" placeholder="Odontologo" id="id_odontologo" value="<?php echo $id_odontologo ?>" name="id_odontologo">
           
            <?php 
if(isset($_GET['id_paciente'])){
    
 $query2 = "SELECT * from admin";
            $resultado2 = $mysqli->query($query2) or die ($mysqli->error);

            while($row = mysqli_fetch_array($resultado2)){

           echo  $id_odontologo2=$row['id_odontologo'];
            $nombre_completo=$row['nombre_completo'];

            ?>
           <option <?php if ($id_odontologo2 == $id_odontologo ) echo 'selected'; ?> value="<?php echo $id_odontologo2; ?>"><?php echo $nombre_completo;?></option>
          <?php }     
    
    
}else{
    
     $query2 = "SELECT * from admin";
            $resultado2 = $mysqli->query($query2) or die ($mysqli->error);

            while($row = mysqli_fetch_array($resultado2)){
    ?>             
               <option value="<?php  echo $row['id_odontologo'] ?>"> <?php  echo $row['nombre_completo']; ?>  
            </option>
    <?php 
          }  //cierra while  
}//cierra else
           
   ?>            
          </select>
           <br> 
      </div>
        
        
      <label for="inputEmail" class="col-lg-2 control-label">Matrícula/Id</label>
      <div class="col-lg-10">
      <input type="text" name="matricula" id="matricula" class="form-control"  placeholder="Matrícula/Id" value="<?php echo $matricula ?>" onkeypress="return solonumeros(event)" title="Introduzca un número" required <?php if(isset($_GET['id_paciente'])){ echo "disabled"; }?>>
          <br>  
      </div>
        
         <label for="inputEmail" class="col-lg-2 control-label">Apellidos</label>
      <div class="col-lg-10">
        <input type="text" name="apellido" id="apellidos" class="form-control"  value="<?php echo $apellido ?>" placeholder="Apellidos"  required>
           <br>
      </div>
        
    <label for="inputEmail" class="col-lg-2 control-label">Nombres</label>
      <div class="col-lg-10">
        <input name="nombre" type="text" id="nombre" class="form-control"  value="<?php echo $nombre ?>" placeholder="Nombres" required>
          <br>
      </div>
        
          <!--fecha-->
        
         <label for="inputEmail" class="col-lg-2 control-label">Fecha Nacimiento</label>
      <div class="col-lg-10">
        <input name="fecha" type="date" id="f_nacimiento" class="form-control" value="<?php echo $fecha ?>">
          <br>
      </div>
       
           <label class="col-lg-2 control-label">Edad</label>
      <div class="col-lg-10">
        <input type="text" name="edad" id="edad" class="form-control"value="<?php echo $edad ?>" placeholder="Años" onkeypress="return solonumeros(event)" title="Introduzca edad" required>
          <br>  
      </div>
        <!--sexo-->
         <div class="form-group">
      <label class="col-lg-2 control-label">Sexo</label>
      <div class="col-lg-10">
        <div class="radio" >
          <label>
            <input type="radio" name="sexo" id="sexo" <?php if ($sexo=="Femenino"){ echo "checked = true";}else{ echo "checked = false";}?>>Femenino</label>
             <label> <input type="radio" name="sexo" id="sexo" <?php if ($sexo=="Masculino"){ echo "checked = true";}else{ echo "checked = false";}?> >Masculino</label>
        </div>
      </div>
    </div>
       <!--Direccion-->
        <label class="col-lg-2 control-label">Dirección</label>
      <div class="col-lg-10">
        <input type="text" name="direccion" id="direccion" class="form-control" value="<?php echo $direccion ?>" placeholder="Dirección"required>
          <br>  
      </div>
        <!--Estado-->
          
      <label for="select" name="estado"  class="col-lg-2 control-label">Estado</label>
      <div class="col-lg-10">
        <select class="form-control" id="estado" name="estado" value="<?php echo $estado?>">
          <option <?php if ($estado == "Ninguno" ) echo 'selected'; ?> >Ninguno</option>
          <option  <?php if ($estado == "Aguascalientes" ) echo 'selected'; ?>>Aguascalientes</option>
          <option <?php if ($estado == "Baja California" ) echo 'selected'; ?>>Baja California</option>
          <option <?php if ($estado == "Baja California Sur" ) echo 'selected'; ?>>Baja California Sur</option>
          <option <?php if ($estado == "Campeche" ) echo 'selected'; ?>>Campeche</option>
             <option <?php if ($estado == "Chiapas" ) echo 'selected'; ?>>Chiapas</option>
             <option <?php if ($estado == "Chihuahua" ) echo 'selected'; ?>>Chihuahua</option>
             <option <?php if ($estado == "Coahuila" ) echo 'selected'; ?>>Coahuila</option>
             <option <?php if ($estado == "Campeche" ) echo 'selected'; ?>>Campeche</option>
             <option <?php if ($estado == "Colima" ) echo 'selected'; ?>>Colima</option>
             <option <?php if ($estado == "Distrito Federal" ) echo 'selected'; ?>>Distrito Federal</option>
            <option <?php if ($estado == "Durango" ) echo 'selected'; ?>>Durango</option>
            <option <?php if ($estado == "Estado de México" ) echo 'selected'; ?>>Estado de México</option>
            <option <?php if ($estado == "Guanajuato" ) echo 'selected'; ?>>Guanajuato</option>
            <option <?php if ($estado == "Guerrero" ) echo 'selected'; ?>>Guerrero</option>
            <option <?php if ($estado == "Hidalgo" ) echo 'selected'; ?>>Hidalgo</option>
            <option <?php if ($estado == "Jalisco" ) echo 'selected'; ?>>Jalisco</option>
            <option <?php if ($estado == "Michoacán" ) echo 'selected'; ?>>Michoacán</option>
            <option <?php if ($estado == "Morelos" ) echo 'selected'; ?>>Morelos</option>
            <option <?php if ($estado == "Nayarit" ) echo 'selected'; ?>>Nayarit</option>
            <option <?php if ($estado == "Nuevo León" ) echo 'selected'; ?>>Nuevo León</option>
            <option <?php if ($estado == "Oaxaca" ) echo 'selected'; ?>>Oaxaca</option>
            <option <?php if ($estado == "Puebla" ) echo 'selected'; ?>>Puebla</option>
            <option <?php if ($estado == "Querétaro" ) echo 'selected'; ?>>Querétaro</option>
            <option <?php if ($estado == "Quintana Roo" ) echo 'selected'; ?>>Quintana Roo</option>
            <option <?php if ($estado == "San Luis Potosí" ) echo 'selected'; ?>>San Luis Potosí</option>
            <option <?php if ($estado == "Sinaloa" ) echo 'selected'; ?>>Sinaloa</option>   
            <option <?php if ($estado == "Sonora" ) echo 'selected'; ?>>Sonora</option>  
            <option <?php if ($estado == "Sinaloa" ) echo 'selected'; ?>>Sinaloa</option>  
            <option <?php if ($estado == "Tabasco" ) echo 'selected'; ?>>Tabasco</option>  
            <option <?php if ($estado == "Tamaulipas" ) echo 'selected'; ?>>Tamaulipas</option>  
            <option <?php if ($estado == "Tlaxcala" ) echo 'selected'; ?>>Tlaxcala</option>  
            <option <?php if ($estado == "Veracruz" ) echo 'selected'; ?>>Veracruz</option>  
            <option <?php if ($estado == "Yucatán" ) echo 'selected'; ?>>Yucatán</option>  
            <option <?php if ($estado == "Zacatecas" ) echo 'selected'; ?>>Zacatecas</option>  
        </select>
           <br> 
      </div>
    
        
          <!--Ciudad-->
        <label class="col-lg-2 control-label">Ciudad</label>
      <div class="col-lg-10">
        <input type="text" name="ciudad" id="ciudad" class="form-control" value="<?php echo $ciudad?>" placeholder="Ciudad">
          <br>  
      </div> 
        
         <!--CP-->
      <label class="col-lg-2 control-label">CP</label>
      <div class="col-lg-10">
        <input type="text" name="cp" id="cp" class="form-control" value="<?php echo $cp?>" placeholder="Código Postal" onkeypress="return solonumeros(event)" title="No. Codigo Postal" >
          <br>  
      </div> 
              <!--estado civil-->
        <label class="col-lg-2 control-label">Estado Civil</label>
      <div class="col-lg-10">
        <select name="estadocivil" id="edo_civil" class="form-control" id="select" value="<?php echo $estcivil?>" >
          <option  <?php if ($estcivil == "Soltero" ) echo 'selected'; ?>>Soltero</option>
          <option  <?php if ($estcivil == "Casado" ) echo 'selected'; ?>>Casado</option>
          <option <?php if ($estcivil == "Divorciado" ) echo 'selected'; ?>>Divorciado</option>
          </select>
          <br>
      </div> 
        
        <!--ocupacion-->
      <label  class="col-lg-2 control-label">Ocupación</label>
      <div class="col-lg-10">
        <input name="ocupacion" id="ocupacion" type="text" class="form-control" value="<?php echo $ocupacion?>" placeholder="Ocupación">
          <br>  
      </div> 
        
        
           <!--Correo-->
      <label  class="col-lg-2 control-label">Correo</label>
      <div class="col-lg-10">
        <input name="correo" id="correo"   type="email"  class="form-control" value="<?php echo $correo?>" placeholder="ejemplo@correo.com" required>
          <br>  
      </div> 
        
        
        
        
        <label class="col-lg-2 control-label">Celular</label>
      <div class="col-lg-10">
        <input name="celular" id="celular" type="text" class="form-control" value="<?php echo $celular?>" placeholder="+52 000 000 00 00" onkeypress="return solonumeros(event)" title="Introduzca Numero telefónico"  required>
          <br>  
      </div> 
        
          <label class="col-lg-2 control-label">Tel. Casa</label>
      <div class="col-lg-10">
        <input name="telcasa" id="telcasa" type="text" class="form-control" value="<?php echo $telcasa?>" onkeypress="return solonumeros(event)" title="No se permite letras"  placeholder="Tel. Casa">
          <br>  
      </div> 
        
        
          <label class="col-lg-2 control-label">Alergia</label>
      <div class="col-lg-10">
        <textarea  name="alergia" id="alergia" class="form-control" rows="3" value="" id="textArea"><?php echo $alergia; ?></textarea>
        <span class="help-block">Detalles de alergias que ha tenido.</span>
          <br>  
      </div>   
    </div>
  </fieldset>
       
        
         <div class="modal-footer">
                        <button type="submit" id="cancelar" class="btn btn-default" data-dismiss="modal">Cancelar</button>
             
    <?php 
    
             if(isset($_GET['id_paciente'])){
                 echo "<button value='1' id='button_actualizar'  class='btn btn-warning' > <span class='glyphicon glyphicon-refresh'aria-hidden='true'></span>&nbsp;Actualizar Cambios</button>";
                 
             }else{
                echo "<button value='1' id='button_guardar' class='btn btn-success' ><span class='glyphicon glyphicon-floppy-saved'aria-hidden='true'></span>&nbsp;Guardar Paciente</button>";  
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
        
       
        
        
        
        
  