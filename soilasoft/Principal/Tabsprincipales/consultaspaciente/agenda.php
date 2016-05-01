<?php include("../jslink/js.php");
include("../jslink/link.php"); ?>

<ul class="nav nav-tabs">
  <li class="active">
      <a href="#agenda" data-toggle="tab" aria-expanded="false">Lista de Citas</a>      
 </li>
      <li class="dropdown">
      <div class="btn-group">
   <a  class="btn btn-primary">Nueva Cita</a>
      </div>
          
          <div class="btn-group">
   <a  class="btn btn-warning" href="modalnuevaconsulta.php">Nueva Consulta</a>
      </div>
       </li>
</ul>
         
   <table class="table table-striped table-hover ">
       <span id="liveclock" style="position:absolute;left:0;top:0;"></span>  
  <thead>
    <tr>
      <th>#</th>
      <th>Paciente</th>
      <th>Fecha | Hora</th>
      <th>Doctor</th>
    </tr>
  </thead>
  <tbody>
    <tr class="active">
      <td>1</td>
      <td>ejemplo</td>
      <td>ejemplo</td>
      <td>ejemplo</td>
    </tr>
    <tr  >
      <td>2</td>
      <td>ejemplo</td>
      <td>ejemplo</td>
      <td>ejemplo</td>
    </tr>
    <tr class="active" >
      <td>3</td>
      <td>ejemplo</td>
      <td>ejemplo</td>
      <td>ejemplo</td>
    </tr>
    <tr >
      <td>4</td>
      <td>ejemplo</td>
      <td>ejemplo</td>
      <td>ejemplo</td>
    </tr>
    <tr class="active" >
      <td>5</td>
      <td>ejemplo</td>
      <td>ejemplo</td>
      <td>ejemplo</td>
    </tr>
    <tr >
      <td>6</td>
      <td>ejemplo</td>
      <td>ejemplo</td>
      <td>ejemplo</td>
    </tr>
    <tr class="active" >
      <td>7</td>
      <td>ejemplo</td>
      <td>ejemplo</td>
      <td>ejemplo</td>
    </tr>
  </tbody>
</table>


