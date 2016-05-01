<?php 
 /*
 
$mysqli=new mysqli("localhost","root","","soilasoft"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	mysql_select_db("soilasoft");
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
     
     
*/  
	
	 class Conexion{
         function con(){
              global $mysqli;	
 $mysqli = new mysqli("localhost", "root", "", "saila");
         
     /* comprobar la conexión */
if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_errno);
}
return $mysqli;

     } 
             
         }
       
/*

class Conexion{
     
     public function con(){
$mysqli=new mysqli("localhost","root","","soilasoft"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	mysql_select_db("soilasoft");
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
     
     }
 }
	
	 
  */   
 ?> 
