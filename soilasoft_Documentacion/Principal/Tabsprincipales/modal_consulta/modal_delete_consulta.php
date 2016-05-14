<?php

$id_matricula=$_GET['id_paciente'];

?>


      <div class="modal-content panel-danger">
        <div class="modal-header panel-heading">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Eliminar Paciente</h4>
        </div>
        <div class="modal-body">
            <h1>Seguro de eliminar?</h1>
            <?php echo $id_matricula;?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" id="button_eliminar" class="btn btn-primary">Eliminar</button>
        </div>
      </div><!-- /.modal-content -->
    
<script>
  $(document).ready(function(){   
                
                        //notificaciones
              
                
    $("#button_eliminar").click(function(){
        var button="eliminar_paciente"; 
        //variables de inp

       //var id_odontologo = $("#id_odontologo").val();
        var matricula = <?php echo $id_matricula; ?>;               

        var datastring="eliminar="+ button + "&matricula="+ matricula;              


    $.ajax({
                type:"POST",
                url:"Tabsprincipales/modal_paciente/control_paciente.php",
                data:datastring,
                success: function(resultado) {                
                   window.location.assign("/soilasoft/Principal/index.php");
                    
                    
                }
     });
       
    });
                     
               
                
 });
        
    </script>