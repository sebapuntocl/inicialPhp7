
<style>
.custom_body {
    background: linear-gradient(135deg, rgba(72, 214, 36, 0.98) 0%, rgba(56, 99, 255, 1) 107%, rgba(26, 35, 147, 1) 122%, rgba(111, 237, 46, 1) 100%) no-repeat center center fixed;
    /* background: url(01.jpg) no-repeat center center fixed;  */
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.login_box {
    margin:0 auto;
    max-width: 400px;
    min-width: 320px;
    width: 100%;
}
.input-box {
    float: left;
    margin-bottom: 10px;
    text-align: left;
    width: 100%;
}
.i_icon {
    border: medium none;
    border-radius: 0;
    color: #3965a0;
    float: left;
    padding: 12px;
    top: 32px;
    width: 40px;
}
.input_layout {
    border: medium none;
    border-radius: 0;
    float: left;
    height: 40px;
    margin: 0;
    padding: 0 10px;
    width: 89%;
}
.main-box {
    background: rgba(255, 251, 251, 0.41) none repeat scroll 0 0;
    float: left;
    margin-bottom: 100px;
    margin-top: 100px;
    padding: 50px 15px;
    width: 100%;
    border: 1px solid #fff;
}
.btn_style {
    background-color:  rgba(57, 101, 160, 1);
    color: #fff;
    padding: 10px 0;
    width: 100%;
    border: none;
}
.btn_style:hover {
    background-color: rgba(57, 101, 160, 1);
    color: #ffffff;
}

</style>


<body>


<div class="custom_body">
    <div class="container">
    	<div class="row">
    	    
    	    <div class="login_box">
    	        <section class="main-box">
        	        <form method="POST">
        	        <div class="input-box">
            	        <span class="input-group-addon i_icon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" placeholder="Usuario" name="usuarioIngreso" required>
                    </div>
                    <div class="input-box">
            	         <span class="input-group-addon i_icon"><i class="glyphicon glyphicon-lock"></i></span>
                         <input type="password" class="form-control" placeholder="Contraseña" name="passwordIngreso" required>
                    </div>
                    <input type="submit" class="btn btn-default btn_style" value="Entrar">
                    <?php
						$ingreso = new Ingreso();
						$ingreso -> ingresoController();

						if(isset($_GET["action"])){
							if($_GET["action"] == "fallo"){
								echo '<p class="bg-danger" style="padding:10px;margin-top:20px;clear:both"><small>Fallo el Ingreso</p>';
							}
						}
					?>
                    </form>
                </section>    
    	    </div>
    	    
    	</div>
    </div>
</div>    
