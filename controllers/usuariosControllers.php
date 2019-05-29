<?php

class UsuariosControllers{

/*========================================
=            LISTAR USUARIOS             =
========================================*/
	public static function vistaUsuariosController(){
        
		$respuesta = Usuarios::vistaUsuariosModel("usuarios"); //la tabla usuarios

	#El constructor foreach proporciona un modo sencillo de iterar sobre arrays. foreach funciona sólo sobre arrays y objetos, y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no inicializada.

		foreach($respuesta as $row => $item){

			if( $item["rol"] == 0){

				$rol = "Administrador";

		      }

		     else{

		        $rol = "Editor";

		      }

		echo'<tr>
				<td>'.$item["nombre"].'</td>
				<td>'.$item["usuario"].'</td>
				<td>'.$item["email"].'</td>
				<td>'.$rol.'</td>
				<td>    
				
				<a href="#usrEditar'.$item["id_us"].'" data-toggle="modal"><button class="btn btn-info d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Perfil de Usuario"><i class="fas fa-edit"></i></button></a>

				<a href="#usrBorrar'.$item["id_us"].'" data-toggle="modal"><button class="btn btn-danger d-inline-block" tabindex="0" data-toggle="tooltip" title="Editar Perfil de Usuario"><i class="fas fa-trash-alt"></i></button></a>
				
			</tr>

<!-- Modal EDITAR USUARIOS -->

<div class="modal fade" id="usrEditar'.$item["id_us"].'" class="modal fade">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editor de Usuarios</h4>
      </div>
      <div class="modal-body">
        

        <form name="editorInvitado"  action="" method="post">
        <input type="hidden" value="'.$item["id_us"].'" name="id_us">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Nombre *</label>
							<input type="text" class="form-control" name="nombreEdit" id="nombreEdit" value="'.$item["nombre"].'" required >
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Email *</label>
							<input type="email" class="form-control" name="email" id="email" value="'.$item["email"].'" required>
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Usuario *</label>
							<input type="text" class="form-control" name="usuario" id="usuario" value="'.$item["usuario"].'" required >
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Clave *</label>
							<input type="password" class="form-control" name="password" id="password" value="'.$item["password"].'" required>
						</div>
					</div>
					
				</div>
				<div class="row">
				
					<div class="col-md-6">
                                 <div class="form-group">
									  <label for="sel1">Perfil del Usuario</label>
									  <select class="form-control"  name="perfil" id="perfil"  data-width="100%">
										<option value="'.$item["rol"].'">'.$rol.'</option>
									    <option value="1">Editor</option>
									    <option value="0">Administrador</option>
									    
									  </select>
									</div> 
                            </div>
					
					
				</div>
				
				
				
				<div class="clearfix"></div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Salir</button>
        <input type="submit" class="btn btn-info btn-fill pull-right" id="guarEvent"  value="Guardar">
			</form>
      </div>
    </div>
  </div>
</div>



<!-- ELIMINAR USUARIOS -->
<div id="usrBorrar'.$item["id_us"].'"  class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <p>¿Seguro que quieres borrar este elemento?</p>
                <p class="text-warning"><small>Si lo borras, nunca podrás recuperarlo.</small></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
								<a href="index.php?action=usuarios&idBorrar='.$item["id_us"].'"><button class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Eliminar">Eliminar</button></a></td>

            </div>
        </div>
    </div>
</div>


				';

		}

	}

	
/*=============================================
          CREAR PERFIL DE USUARIOS         */
public static function registroClientesController(){

		if(isset($_POST["nombre"])){

			$datosController = array("nombre"=>$_POST["nombre"], 
                                     "usuario"=>$_POST["usuario"],
								     								 "email"=>$_POST["email"],
                                     "rol"=>$_POST["perfil"],
								     								 "password"=>$_POST["clave"]
                                    );

			$respuesta = Usuarios::registroUsuariosModel($datosController, "usuarios");

			if($respuesta == "success"){

				echo'<script>

					swal({
						  title: "¡OK!",
						  text: "¡Has Creado un Nuevo Usuario!",
						  type: "success",
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
					},

					function(isConfirm){
							 if (isConfirm) {	   
							    window.location = "usuarios";
							  } 
					});


				</script>';

			}

			else{

				var_dump($respuesta);

			}

		}

	}
/*====================================================
=            EDITA USUARIOS DE UN EVENTO            =
====================================================*/
public static function editarUsuariosController(){

		if(isset($_POST["nombreEdit"])){

				                      
			$datosController = array( "id_us"=>$_POST["id_us"],
									  "nombre"=>$_POST["nombreEdit"], 
								      "email"=>$_POST["email"],
								  	  "usuario"=>$_POST["usuario"],
								      "password"=>$_POST["password"],
								  	  "rol"=>$_POST["perfil"]);

			$respuesta = Usuarios::actualizarUsuariosModel($datosController, "usuarios");

			if($respuesta == "success"){

				echo'<script>

					swal({
						  title: "¡Buen trabajo!",
						  text: "¡Has editado el usuario!",
						  type: "success",
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
					},

					function(isConfirm){
							 if (isConfirm) {	   
							    window.location = "usuarios";
							  } 
					});


				</script>';

			}

			else{

				echo $respuesta;

			}

		}
	
	}

/*==========================================
=            ELIMINAR USUARIOS            =
==========================================*/
public static function borrarUsuariosController(){
	
	if(isset($_GET["idBorrar"])){
			
		$datosController = $_GET["idBorrar"];
		
			$respuesta = Usuarios::borrarUsuarioModel($datosController, "usuarios");
			if($respuesta == "success"){
					echo'<script>
					swal({
						  title: "¡OK!",
						  text: "¡El Usuario se ha borrado correctamente!",
						  type: "success",
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
					},
					function(isConfirm){
							 if (isConfirm) {	   
							    window.location = "usuarios";
							  } 
					});
				</script>';
			}
		}
	}





}