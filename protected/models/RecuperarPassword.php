<?php


class RecuperarPassword extends CFormModel{
	
	public $usuario;
	public $email;
	
	public function rules(){
		return array(
			array(
				'usuario, email',
				'required',
				'message'=>'El campo es requerido'
			),
			array(
				'usuario',
				'match',
				'pattern' =>'/^[a-z0-9àáñéèíìóòúúäüïöü\_]+$/i',
				'message'=>'Error, solo letras, números y guiones bajos'
			),
			array(
				'email',
				'email',
				'message'=>'Formato de email incorrecto'
			)
		);
	}
	
	public function attributeLabels(){
		return array(
				'usuario' => 'Nombre de usuario',
		);
	}
	
	public function generaPass(){
		//Se define una cadena de caractares. Te recomiendo que uses esta.
		$cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		//Obtenemos la longitud de la cadena de caracteres
		$longitudCadena=strlen($cadena);
			
		//Se define la variable que va a contener la contraseña
		$pass = "";
		//Se define la longitud de la contraseña, en mi caso 10, pero puedes poner la longitud que quieras
		$longitudPass=10;
			
		//Creamos la contraseña
		for($i=1 ; $i<=$longitudPass ; $i++){
			//Definimos numero aleatorio entre 0 y la longitud de la cadena de caracteres-1
			$pos=rand(0,$longitudCadena-1);
	
			//Vamos formando la contraseña en cada iteraccion del bucle, añadiendo a la cadena $pass la letra correspondiente a la posicion $pos en la cadena de caracteres definida.
			$pass .= substr($cadena,$pos,1);
		}
		return $pass;
	}
	
}