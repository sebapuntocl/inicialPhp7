<div class="container">
	<div class="row">
		<div class="col-md-3">
			<form method="POST">
				<div class="form-group">
					<input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
				</div>
								<div class="form-group">
					<input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="email" placeholder="Email">
				</div>
				<div class="form-group">
					<select name="perfil" class="form-control" required>
						<option value="1">Seleccione Perfil</option>
						<option value="1">Vendedor</option>
						<option value="0">Administrador</option>
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="clave"  placeholder="Clave" required>
				</div>
				
				<div class="form-group">
					<input type="Submit" class="btn btn-primary btn-block" value="Crear" id="btn-crear">
				</div>
				<?php 
	 				$Usuarios = new UsuariosControllers();
	 				$Usuarios -> registroClientesController();
 				?>
			</form>
		</div>
		<div class="col-md-9">
			
                                            
                                       
                                    	
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Lista de usuarios registrados</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered tablas" id="tablas"  width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th>Perfil</th>
                    <th>Accion</th>
                    </tr>
                  </thead>
                  
                    <?php 
											$Usuarios = new UsuariosControllers();
											$Usuarios -> vistaUsuariosController();
											$Usuarios -> editarUsuariosController();
											$Usuarios -> borrarUsuariosController();
										?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
  </div>
  <!-- /.container-fluid -->
		</div>
	</div>
</div>