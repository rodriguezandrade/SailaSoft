
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

class conexion{
	function conectar(){
		return mysqli_connect("localhost","root","" );
        
	}
}
/*
$cn=new conexion();
if ($cn->conectar()){
    echo "conectad";
}else{
    echo"desconectado";
}*/

?>