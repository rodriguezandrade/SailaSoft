<?php
  require_once ('conexion/conexion.php');
$conexionSacadatos = new Conexion();
$mysqli = $conexionSacadatos->con();



/*
 include("conexion/conexion.php");
mysql_connect("localhost","root","");
mysql_select_db("soilasoft");*/
$consulta = "SELECT * FROM admin";
$rec = $mysqli->query($consulta);
   
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



<button type="button"  class="btn btn-primary glyphicon-plus" data-toggle="modal" data-target=".bs-example-modal-lg">Nuevo Paciente</button>
  

                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Agregar Nuevo Paciente</h4>
                      </div>
                      <div class="modal-body">
                        <h4>Datos del Paciente</h4>
                          
    <form method="POST" action="#" class="form-horizontal">
  <fieldset>
    <legend>Principales</legend>
    <div class="form-group">
        
       
        
        <label for="select"    class="col-lg-2 control-label">Odontologo</label>
      <div class="col-lg-10">
          
        <select class="form-control" placeholder="Odontologo" id="select" name="id_odontologo">
            
            
            <?php 
          while($row=$rec->fetch_array()){ ?>             
               <option value="<?php  echo $row['id_odontologo'] ?>"> <?php  echo $row['nombre_completo'] 
            
           ?>  
            </option>";
           <?php } ?>
  </select>
           <br> 
      </div>
        
        
      <label for="inputEmail" class="col-lg-2 control-label">Matrícula/Id</label>
      <div class="col-lg-10">
      <input type="text" name="matricula" class="form-control" id="inputEmail" placeholder="Matrícula/Id" onkeypress="return solonumeros(event)" title="Introduzca un número" required>
          <br>  
      </div>
        
         <label for="inputEmail" class="col-lg-2 control-label">Apellidos</label>
      <div class="col-lg-10">
        <input type="text" name="apellido" class="form-control" id="inputEmail" placeholder="Apellidos"  required>
           <br>
      </div>
        
    <label for="inputEmail" class="col-lg-2 control-label">Nombres</label>
      <div class="col-lg-10">
        <input name="nombre" type="text" class="form-control" id="inputEmail" placeholder="Nombres" required>
          <br>
      </div>
        
          <!--fecha-->
        
         <label for="inputEmail" class="col-lg-2 control-label">Fecha Nacimiento</label>
      <div class="col-lg-10">
        <input name="fecha" type="date" class="form-control" >
          <br>
      </div>
       
           <label class="col-lg-2 control-label">Edad</label>
      <div class="col-lg-10">
        <input type="text" name="edad" class="form-control" id="inputEmail" placeholder="Años" onkeypress="return solonumeros(event)" title="Introduzca edad" required>
          <br>  
      </div>
        <!--sexo-->
         <div class="form-group">
      <label class="col-lg-2 control-label">Sexo</label>
      <div class="col-lg-10">
        <div class="radio" >
          <label>
            <input type="radio" name="sexo" id="optionsRadios1" value="Femenino" checked=""> Femenino</label>
             <label> <input type="radio" name="sexo" id="optionsRadios2"value="Masculino">Masculino</label>
        </div>
      </div>
    </div>
       <!--Direccion-->
        <label class="col-lg-2 control-label">Dirección</label>
      <div class="col-lg-10">
        <input type="text" name="direccion" class="form-control" id="inputEmail" placeholder="Dirección"required>
          <br>  
      </div>
        <!--Estado-->
          
      <label for="select" name="estado"  class="col-lg-2 control-label">Estado</label>
      <div class="col-lg-10">
        <select class="form-control" id="select" name="estado">
          <option>Ninguno</option>
          <option>Aguascalientes</option>
          <option>Baja California</option>
          <option>Baja California Sur</option>
          <option>Campeche</option>
             <option>Chiapas</option>
             <option>Chihuahua</option>
             <option>Coahuila</option>
             <option>Campeche</option>
             <option>Colima</option>
             <option>Distrito Federal</option>
            <option>Durango</option>
            <option>Estado de México</option>
            <option>Guanajuato</option>
            <option>Guerrero</option>
            <option>Hidalgo</option>
            <option>Jalisco</option>
            <option>Michoacán</option>
            <option>Morelos</option>
            <option>Nayarit</option>
            <option>Nuevo León</option>
            <option>Oaxaca</option>
            <option>Puebla</option>
            <option>Querétaro</option>
            <option>Quintana Roo</option>
            <option>San Luis Potosí</option>
            <option>Sinaloa</option>   
            <option>Sonora</option>  
            <option>Sinaloa</option>  
            <option>Tabasco</option>  
            <option>Tamaulipas</option>  
            <option>Tlaxcala</option>  
            <option>Veracruz</option>  
            <option>Yucatán</option>  
            <option>Zacatecas</option>  
        </select>
           <br> 
      </div>
    
        
          <!--Ciudad-->
        <label class="col-lg-2 control-label">Ciudad</label>
      <div class="col-lg-10">
        <input type="text" name="ciudad"class="form-control" id="inputEmail" placeholder="Ciudad">
          <br>  
      </div> 
        
         <!--CP-->
      <label class="col-lg-2 control-label">CP</label>
      <div class="col-lg-10">
        <input type="text" name="cp" class="form-control" id="inputEmail" placeholder="Código Postal" onkeypress="return solonumeros(event)" title="No. Codigo Postal" >
          <br>  
      </div> 
              <!--estado civil-->
        <label class="col-lg-2 control-label">Estado Civil</label>
      <div class="col-lg-10">
        <select name="estadocivil"class="form-control" id="select">
          <option>Soltero</option>
          <option>Casado</option>
          <option>Divorciado</option>
          </select>
          <br>
      </div> 
        
        <!--ocupacion-->
      <label  class="col-lg-2 control-label">Ocupación</label>
      <div class="col-lg-10">
        <input name="ocupacion" type="text" class="form-control" id="inputEmail" placeholder="Ocupación">
          <br>  
      </div> 
        
        
        <!--Correo-->
        <label  class="col-lg-2 control-label">Correo</label>
      <div class="col-lg-10">
        <input name="correo" type="text" class="form-control" id="inputEmail" placeholder="Ocupación">
          <br>  
      </div> 
        
        
        
        <label class="col-lg-2 control-label">Celular</label>
      <div class="col-lg-10">
        <input name="celular" type="text" class="form-control" id="inputEmail" placeholder="+52 000 000 00 00" onkeypress="return solonumeros(event)" title="Introduzca Numero telefónico"  required>
          <br>  
      </div> 
        
          <label class="col-lg-2 control-label">Tel. Casa</label>
      <div class="col-lg-10">
        <input name="telcasa" type="text" class="form-control" id="inputEmail" onkeypress="return solonumeros(event)" title="No se permite letras"  placeholder="Tel. Casa">
          <br>  
      </div> 
        
        
          <label class="col-lg-2 control-label">Alergia</label>
      <div class="col-lg-10">
        <textarea  name="alergia"  class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">Detalles de alergias que ha tenido.</span>
          <br>  
      </div>   
    </div>
  </fieldset>
       
        
         <div class="modal-footer">
                        <button  type="submit" id="cancelar" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" id="btn_enviar"  >Guardar Cambios</button>
                      </div>
       <?php
    require_once("registrarpaciente.php");
   if (isset($_POST["matricula"])){
$insertando=new  NuevoRegistropaciente($_POST["matricula"],$_POST["apellido"], $_POST["nombre"], $_POST["fecha"], $_POST["edad"], $_POST["sexo"], $_POST["direccion"], $_POST["estado"], $_POST["ciudad"], $_POST["cp"], $_POST["estadocivil"], $_POST["ocupacion"], $_POST["correo"], $_POST["celular"], $_POST["telcasa"], $_POST["alergia"], $_POST["id_odontologo"]);
$insertando->insertar();
 }
        ?>
</form>
                          
                  
</div>
 </div>


                    </div>
                  </div>   

       
