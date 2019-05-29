<?php 

	class Conexion{

		public static function conectar(){
			$link = new PDO("mysql:host=localhost;dbname=2000","root","");
			return $link;
		}

		// public function conectar(){
		// 	$link = new PDO("mysql:host=localhost;dbname=oscarrey_aricasurf","oscarrey_seba","dnev*;!*RHI#");
		// 	return $link;
		// }
	
	}



 ?>