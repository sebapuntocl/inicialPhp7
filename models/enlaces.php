<?php 

class EnlacesModels{

	public static function enlacesModel($enlaces){

		
		if($enlaces == "ingreso" ||
		   $enlaces == "inicio"  ||
		   $enlaces == "salir"  ||
	 	   $enlaces == "usuarios" 
		//    $enlaces == "eventosDet" ||
		//    $enlaces == "eventosNotas" ||
		//    $enlaces == "eventosImagen" ||
		//    $enlaces == "sociales" ||
		//    $enlaces == "socialesVer" ||
		//    $enlaces == "noticias" ||
		//    $enlaces == "noticiasVer" ||
		//    $enlaces == "eventosvideos" ||  
		//    $enlaces == "sponsors" || 
		//    $enlaces == "galeria" || 
		//    $enlaces == "salir" ||
		//    $enlaces == "nosotros" ||
		//    $enlaces== "borrar"
		   ){

			$module = "views/modules/".$enlaces.".php";
		}	

		else if($enlaces == "index"){
			$module = "views/modules/ingreso.php";
		}

		else{
			$module = "views/modules/ingreso.php";		
		}

		return $module;

	}


}





