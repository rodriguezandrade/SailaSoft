/**
 * Saila Soft
 * @author Jonathan Rodriguez
 * @version 1.0 
 */ 
 
 * 
    * variables de sesion de usuario y contrase;a
    * @session usuario, contraseña

 */

<?php

include ("../base/usuariosDatos.php");

class usuarcontrolador{
      function insertarUsuarios($usuario,$pass){
		$obj = new usuariosDatos();
		return $obj->insertarUsuarios($usuario,$pass);
	  }
      function validar($usuario,$pass){
        $obj = new usuariosDatos();
		return $obj->validar($usuario,$pass);
      }
}

?>