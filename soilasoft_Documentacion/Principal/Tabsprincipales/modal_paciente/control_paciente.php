/**
 * Saila Soft
 * @author Jonathan Rodriguez
 * @version 1.0 
 
 
  
    * variables publicas
    * @static apellido, nombre, fecha, edad, sexo, direccion, estado,ciudad
      cp, estado civil, ocupacion, correo, celular, telefono de casa, alergia, id del odontologo.

 */

<?php

if(isset($_POST['insert'])){
    require_once("../registrarpaciente.php");
    
      $insertando=new  NuevoRegistropaciente($_POST["matricula"],$_POST["apellidos"], $_POST["nombre"], $_POST["f_nacimiento"], $_POST["edad"], $_POST["sexo"], $_POST["direccion"], $_POST["estado"], $_POST["ciudad"], $_POST["cp"], $_POST["edo_civil"], $_POST["ocupacion"], $_POST["correo"], $_POST["celular"], $_POST["telcasa"], $_POST["alergia"], $_POST["id_odontologo"]);  

      $insertando->insertar();
    
}
if(isset($_POST['update'])){
    require_once("../registrarpaciente.php");
    
      $insertando= new  NuevoRegistropaciente($_POST["matricula"],$_POST["apellidos"], $_POST["nombre"], $_POST["f_nacimiento"], $_POST["edad"], $_POST["sexo"], $_POST["direccion"], $_POST["estado"], $_POST["ciudad"], $_POST["cp"], $_POST["edo_civil"], $_POST["ocupacion"], $_POST["correo"], $_POST["celular"], $_POST["telcasa"], $_POST["alergia"], $_POST["id_odontologo"]);  

      $insertando->modificar();
    
}
if(isset($_POST['eliminar'])){
    require_once("../registrarpaciente.php");
    
      $insertando= new  NuevoRegistropaciente($_POST["matricula"],$_POST["apellidos"], $_POST["nombre"], $_POST["f_nacimiento"], $_POST["edad"], $_POST["sexo"], $_POST["direccion"], $_POST["estado"], $_POST["ciudad"], $_POST["cp"], $_POST["edo_civil"], $_POST["ocupacion"], $_POST["correo"], $_POST["celular"], $_POST["telcasa"], $_POST["alergia"], $_POST["id_odontologo"]);  

      $insertando->eliminar();
    
}






?>