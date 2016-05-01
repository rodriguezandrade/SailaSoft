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