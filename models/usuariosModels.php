<?php 

require_once "conexion.php";

class Usuarios extends Conexion{

/*=======================================
=            LISTAR USUARIOS            =
=======================================*/
public static function vistaUsuariosModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla  ");
		

		$stmt -> execute();

		return $stmt -> fetchAll();

}


/*==========================================
=            REGISTRAR USUARIOS            =
==========================================*/
public static function registroUsuariosModel($datosModel, $tabla){

		
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, email, usuario,rol, password) VALUES (:nombre,:email, :usuario,:rol,:password)");	

		$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
		$stmt->bindParam(":rol", $datosModel["rol"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
		

		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

	}


/*====================================================
=                 ACTUALIZAR USUARIOS                     =
====================================================*/


	public static function actualizarUsuariosModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, email = :email, usuario = :usuario, password = :password, rol = :rol   WHERE id_us = :id_us");

		$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
		$stmt->bindParam(":rol", $datosModel["rol"], PDO::PARAM_STR);
		$stmt->bindParam(":id_us", $datosModel["id_us"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

	}



/*====================================================
=                  BORRAR USUARIOS                   =
====================================================*/
	public static function borrarUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_us = :id_us");
		$stmt->bindParam(":id_us", $datosModel, PDO::PARAM_INT);

		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

	}




}