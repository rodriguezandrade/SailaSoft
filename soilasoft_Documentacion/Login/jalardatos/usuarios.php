
/**
 * Saila Soft
 * @author Jonathan Rodriguez
 * @version 1.0 
 */ 
 
 * 
    * variables constructoras y filtros
    * @static id_odontologo, nombre_completo, usuario, contraseña, correo

 */
<?php

 class usuarios{
	public $id_odontologo;
	function POST_id_odontologo(){
		return $this->id_odontologo;
	}
	function set_id_odontologo($id_odontologo){
		$this->id_odontologo = $id_odontologo;
	}
     public $nombre_completo;
	function POST_nombre_completo(){
		return $this->nombre_completo;
	}
	function set_nombre_completo($nombre_completo){
		$this->nombre_completo = $nombre_completo;
	}
	public $usuario;
	function POST_usuario(){
		return $this->usuario;
	}
	function set_usuario($usuario){
		$this->usuario = $usuario;
	}
     
     public $correo;
	function POST_correo(){
		return $this->correo;
	}
	function set_correo($correo){
		$this->correo = $correo;
	}
	public $contrasena;
	function POST_contrasena(){
		return $this->contrasena;
	}
	function set_contrasena($contrasena){
		$this->contrasena = $contrasena;
	}
 }


?>