 
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>amCharts examples</title>
        <?php
    
    include("../../../soilasoft/principal/jslink/link.php");
    include("../../../soilasoft/principal/jslink/js.php");
    
        ?>
    </head>

    <body>
        
        
      <label class="col-lg-2 control-label">Selecciona un tipo de grafica</label>
      <div class="col-lg-10">
        <select name="tipo_grafica" id="tipo_grafica" class="form-control"  >
             <option label="selecciona un tipo de grafica"></option>
          <option value="c_pacientes">Cantidad de pacientes al dia</option>
          <option value="c_pacientes2">Cantidad de pacientes al dia2</option>
          <option value="c_pacientes3">Cantidad de pacientes al dia3</option>
          </select>
          <br>
      </div> 
        
 <script>
          
   $(document).change(function(){ 
         $("#chartdiv").hide();
        var tipo_grafica = $("#tipo_grafica").val();
     
        $( "#tipo_grafica" ).change(function() {                
               
          
           var datastring="tipo_grafica="+ tipo_grafica;              
           $.ajax({
                type:"POST",
                url:"/soilasoft/Principal/Tabsprincipales/ajax_grafica/c_pacientes.php",
                data:datastring,
            success: function(result){
                
               
                $("#chartdiv").show();
                $("#chartdiv").html(result);   
                

            }  
            });
                       
            });

});
</script>             
            
        
        <div id="chartdiv" style="width: 100%; height: 400px;"></div>
    </body>

</html>