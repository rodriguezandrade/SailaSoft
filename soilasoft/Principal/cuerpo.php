 <div>
     <!--tabs donde se ubica-->
 <link href="/soilasoft/Principal/Tabsprincipales/buscar_reporte/buscar/css.css" rel="stylesheet" type="text/css" />
<script src="/soilasoft/Principal/Tabsprincipales/buscar_reporte/buscar/jquery-ui-1.8.2.custom.min.js"></script>      
    <ul class="nav nav-tabs">
      
  <li class=""  >
      
<a href="#agenda" data-toggle="tab" aria-expanded="true">Agenda</a>
        
        </li>
    <li class="active" >
        <a href="#paciente" data-toggle="tab" aria-expanded=" ">Paciente</a></li>
        
  <li class=""><a>Inicio</a></li>
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="">
      Reportes <span class="caret"></span>  
    </a>
      
      
    <ul class="dropdown-menu">
      <li  class=""><a href="Tabsprincipales/reportes.php"  >Diario</a></li>
      <li class="divider"></li>
      <li><a href="#reportemensual" data-toggle="tab" aria-expanded="false">Mensual</a></li>
    </ul>
  </li>
        
      <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="">Gráficas<span class="caret"></span>  
    </a>
      
      
    <ul class="dropdown-menu">
      <li  class=""><a href="Tabsprincipales/graficaprincipal.php">Pacientes</a></li>
      <li class="divider"></li>
      <li><a href="#reportemensual" data-toggle="tab" aria-expanded="false">Mensual</a></li>
    </ul>
  </li>   
        
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade " id="agenda">
     <?php
     include("Tabsprincipales/agenda.php");
      ?>
  </div>
  <div class="tab-pane fade active in" id="paciente">
      <?php
      include("Tabsprincipales/paciente.php");
      ?>
 
 <script>
          
   $(document).ready(function(){ 
          $("#tabla_ajax").hide();
          $("#tabla_normal").show();
       
        $("#n_paciente").autocomplete({

                        source: "/soilasoft/Principal/Tabsprincipales/buscar_reporte/buscar/global_search.php",
                        minLength: 1,
                        select: function(event, ui) {
                        var getUrl = ui.item.id;
                        if(getUrl != '#'){
                         // location.href = getUrl;
                        }
                },
                html: true, 

                open: function(event, ui) {
                $(".ui-autocomplete").css("z-index", 1000);
                var getUrl = ui.item.icon;

                }
        });
       
        $( "#button_buscar" ).click(function() {
                       
                        
          
            var button="buscar"; 
            //variables de inp

            var n_paciente = $("#n_paciente").val();     
                
                
           var tipo_reporte = "Busqueda_inicio";
           var datastring="insert="+ button + "&n_paciente="+ n_paciente + "&tipo_reporte="+ tipo_reporte;              
            
                
                
            $.ajax({
                type:"POST",
                url:"/soilasoft/Principal/Tabsprincipales/buscar_reporte/buscar_ajax.php",
                data:datastring,
            success: function(result){
                $("#tabla_normal").hide();
                $("#tabla_ajax").show();
                $("#tabla_ajax").html(result);  

            }  
            });
                       
            });

});
</script>             
        

      
   
      
  </div>
  <div class="tab-pane fade" id="reportediario">
    <p></p>
  </div>
  <div class="tab-pane fade" id="reportemensual">
    <p>jue</p>
  </div>
    <div class="tab-pane fade" id="reportemensual">
    <p>jue</p>
  </div>
    
</div>
    </div>


