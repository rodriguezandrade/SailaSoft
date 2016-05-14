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
session_start();
if(isset($_SESSION["usuario"]) && isset($_SESSION["pass"])){
    echo "que onda!!!<br>";
       echo "<a href='cerrarsesion.php'>Cerrar la Secion</a>";
     /*  header("location:../../Principal/index.php");*/
       
}else{
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}
?>