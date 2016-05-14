
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

include "../controlar/usuarcontrolador.php";

if(isset($_POST["usuario"]) || isset($_POST["pass"])){
    if(trim($_POST["usuario"]) == "" || trim($_POST["pass"]) == ""){
        echo "false";
    }else{
        $usuariosCon = new usuarcontrolador();
        if($usuariosCon->insertarUsuarios($_POST["usuario"],$_POST["pass"])){
            echo "true";
        }else{
            echo "false";
        }
    }
}else{
    echo "false";
}

?>