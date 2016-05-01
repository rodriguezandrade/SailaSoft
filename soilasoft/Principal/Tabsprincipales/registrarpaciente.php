

<?php

require_once("conexion/conexion.php");
 class NuevoRegistropaciente 
{
  

	public  $matricula;
	public  $apellido;
	public  $nombre;
	public  $fecha;
	public  $edad;
    public  $sexo;
    public  $direccion;
    public  $estado;
    public  $ciudad;
    public  $cp;
    public  $estcivil;
    public  $ocupacion;
    public  $correo;
    public  $celular;
    public  $telcasa;
    public  $alergia;
    public  $id_odontologo;	
	
function __construct($matricula, $nombre, $apellido, $fecha,$edad,$sexo, $direccion,$estado, $ciudad, $cp,$estcivil,$ocupacion,$correo, $celular, $telcasa, $alergia, $id_odontologo)
	{
	$this->matricula=$matricula;
	$this->apellido=$apellido;
	$this->nombre=$nombre;
	$this->fecha=$fecha;
	$this->edad=$edad;
    $this->sexo=$sexo;
    $this->direccion=$direccion;
    $this->estado=$estado; 
    $this->ciudad=$ciudad;
    $this->cp=$cp;
    $this->estcivil=$estcivil;
    $this->ocupacion=$ocupacion;
    $this->correo=$correo;
    $this->celular=$celular;
    $this->telcasa=$telcasa;
    $this->alergia=$alergia;
    $this->odontologo=$id_odontologo;
    
    $conexionSacadatos = new Conexion();
   	$linkSacadatos = $conexionSacadatos->con();
          
        
	}  
        public function insertar(){
            
           global $mysqli;
			$consulta = "INSERT INTO exp_paciente VALUES('$this->matricula', '$this->apellido', '$this->nombre', '$this->fecha', '$this->edad', '$this->sexo', '$this->direccion', '$this->estado', '$this->ciudad', '$this->cp', '$this->estcivil', '$this->ocupacion', '$this->correo', '$this->celular', '$this->telcasa', '$this->alergia', '$this->odontologo') ";
			if ($mysqli->query($consulta)){                
				header("location: /soilasoft/Principal/index.php");
            }else{
				header("location: /soilasoft/Principal/index.php");
				}
            
        }
     public function eliminar(){
         $conexionSacadatos = new Conexion();
   		$linkSacadatos = $conexionSacadatos->con();
			 $consulta = "DELETE from exp_paciente where matricula_idpaciente=$this->matricula";
			if ($linkSacadatos->query($consulta)){
				echo $consulta;//se guardo con exito	
            }else{
				echo $consulta;//se guardo con exito
				}
         
     }
     
        public function modificar(){
            
        global $mysqli;
            
		$consulta = "UPDATE exp_paciente SET matricula_idpaciente='$this->matricula', apellidos='$this->apellido', nombre='$this->nombre', fecha_nac='$this->fecha', edad='$this->edad', sexo='$this->sexo', direccionactual='$this->direccion',  estado='$this->estado', ciudad='$this->ciudad', codigopostal='$this->cp', estadocivil='$this->estcivil', ocupacion='$this->ocupacion', correo='$this->correo', celular='$this->celular', telcasa='$this->telcasa', alergia='$this->alergia', id_odontologo='$this->odontologo' where matricula_idpaciente='$this->matricula' and id_odontologo='$this->odontologo'";
            
			if ($mysqli->query($consulta)){
				echo $consulta;//se guardo con exito
            }else{
				echo $consulta;//se guardo con exito
				}
			 
					}

            
            
            
            
            
             
     /*       
         $conexionSacadatos = new Conexion();
   		$linkSacadatos = $conexionSacadatos->con();
			 $consulta = "DELETE from exp_paciente where matricula_idpaciente=$this->matricula";
			if ($linkSacadatos->query($consulta)){
					//header("location:index.php");
                  echo '<script type="text/javascript">';
                echo 'eliminar()';
               echo '</script>';
											}
			else{
				//header("location:../index.php");
				} */
         
     }
     
     
 

 