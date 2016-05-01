<?php
session_start();
if(isset($_SESSION["usuario"]) && isset($_SESSION["pass"])){
       header("location:../../Principal/index.php");
       
}else{
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}
?>