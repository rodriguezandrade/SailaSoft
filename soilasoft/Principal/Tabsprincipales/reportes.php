<?php

if (isset($_POST['paciente'])){

$nombre=$_POST["paciente"];
$tipo=$_POST["tipo"];
}else{
$nombre="";
$tipo="";

}
?>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="/soilasoft/Principal/jquery/jquery.min.js"></script>
 
<script type="text/javascript" src="/soilasoft/Principal/jquery/bootstrap.min.js"></script>
 
<!--<script type="text/javascript" src="datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/code.js"></script>-->
<script type="text/javascript" src="/soilasoft/Principal/bootstrapnotifica/bootstrap-notify.js"></script>
<script type="text/javascript" src="/soilasoft/Principal/bootstrapnotifica/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="/soilasoft/Principal/bootstrapnotifica/"></script>  

<link href="buscar_reporte/buscar/css.css" rel="stylesheet" type="text/css" />
<script src="buscar_reporte/buscar/jquery-ui-1.8.2.custom.min.js"></script>
<script type="text/javascript"> 
 $(document).ready(function(){ 
$("#n_paciente").autocomplete({
        source: "buscar_reporte/buscar/global_search.php",
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

});
</script>

<form class="form-horizontal">
  <fieldset>
    <legend>Reportes</legend>
    <div class="form-group">
      <label  class="col-lg-2 control-label">Paciente</label>
      <div class="col-lg-10">        
           <input id="n_paciente" type="text" name="buscar" class="form-control" placeholder="Buscar paciente" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';"/>
      </div>
    </div>
     
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Selecione Reporte</label>
      <div class="col-lg-10">
        <select class="form-control" name="tipo" id="tipo_reporte">
          <option label="Selecciona un tipo de reporte"></option>
          <option value="Lista_pacientes">Lista Pacientes</option>
          <option value="Lista_citas">Lista Citas</option>
          <option value="Lista_consultas">Lista Consultas</option>
          
        </select>
        <br>
       
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancelar</button>
        <button  class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </fieldset>
</form>

<script>
   $(document).ready(function(){
       
       $("tabla_ajax").hide();
       
       $( "#tipo_reporte" ).change(function() {
                       
                        
          
            var button="buscar"; 
            //variables de inp

            var n_paciente = $("#n_paciente").val();
            var tipo_reporte = $("#tipo_reporte").val();
                
                
                
            var datastring="insert="+ button + "&n_paciente="+ n_paciente + "&tipo_reporte="+ tipo_reporte;              
            
                
            $.ajax({
                type:"POST",
                url:"/soilasoft/Principal/Tabsprincipales/buscar_reporte/buscar_ajax.php",
                data:datastring,
            success: function(result){
                $("tabla_ajax").show();
                $("#tabla_ajax").html(result);  

            }  
            });
                       
            });
                });
                     
            
        
    </script>
        
 <div id="tabla_ajax" class="box-body table-responsive no-padding">      

 </div>      
        

