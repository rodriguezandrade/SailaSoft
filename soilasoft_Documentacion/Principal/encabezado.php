/**
 * Saila Soft
 * @author Jonathan Rodriguez
 * @version 1.0 
 */ 

     
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administrador</title>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<?php
    
    include("jslink/link.php");
    include("jslink/js.php");
    ?>

    
</head>
 
    <!--barra de arriba--> 
<body>
      <div>
    <nav class="navbar navbar-default" >    
         
  <div class="container-fluid">
    
    <div class="navbar-header">
       
        
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">  
      </button>
        
      <a class="navbar-brand" href="#" style="margin-left:10%" >SAILASOFT </a> 
       
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       
     
        <div  class="navbar-form navbar-left" role="search"    >
          
          <input id="n_paciente" style="width: 600px" type="text" name="buscar" class="form-control" placeholder="Buscar pacientes por nombre, apellido o matrícula" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';"/> 
                  <button type="submit" id="button_buscar"  class="btn btn-default">Buscar</button>

          </div>
      
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown user user-menu open">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="">
                  <img src="LogoSAILA.png" style="height:30px; width:30px"class="user-image" alt="User Image ">
                  <span class="hidden-xs">Administrador</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="AdminIcon-01.png" class="img-circle" alt="User Image">
                    <p>
                      SailaSoft - administrador
                       
                    </p>
                  </li>
                                 <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Editar</a>
                       
                    </div>
                     <div class="pull-right">
                      <a href="soilasoft/../../loginfinal/visual/cerrarsesion.php" class="btn btn-default btn-flat">Salir </a>
                    </div>
                  </li>
                </ul>
              </li>
       
      </ul>
    </div>
  </div>
</nav>
    </div>
    
    

    