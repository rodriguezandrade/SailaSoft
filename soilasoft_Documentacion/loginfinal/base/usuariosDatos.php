<?php

include "../jalardatos/usuarios.php";
include "conexion.php";

class usuariosDatos{
	function insertarUsuarios($usuario,$pass){
		$cnn = new conexion();
		$con = $cnn->conectar();
		
		$usuarios = new usuarios();
		$usuarios->usuario=$usuario;
		$usuarios->contrasena = $pass;
		mysqli_select_db($con,"soilasoft");
		$sql = "INSERT INTO admin(usuario,contrasena) VALUES(
		'".$usuarios->usuario."',
		'".$usuarios->contrasena."'
		)";
		if(mysqli_query($con,$sql)){
			return true;
		}else{
			return false;
		}
		mysqli_close($con);
	}
    function validar($usuario,$pass){
        $cnn = new conexion();
		$con = $cnn->conectar();
		
		$usuarios = new usuarios();
		$usuarios->usuario=$usuario;
		$usuarios->contrasena = $pass;
        
		mysqli_select_db($con,"soila");
        
		$sql = "SELECT * FROM admin WHERE usuario='".$usuarios->usuario."' and contrasena='".$usuarios->contrasena."'";
        $consulta = mysqli_query($con,$sql);
        $fila = mysqli_fetch_array($consulta);
        if($fila>0){
            if($fila["usuario"] == $usuarios->usuario && $fila["contrasena"]==$usuarios->contrasena){
                return true;
            }
        }else{
            return false;
        }
    }
}
?>