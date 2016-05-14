<?php

class conexion{
	function conectar(){
		return mysqli_connect("localhost","root","","saila");
    
        
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