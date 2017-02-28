

<?php
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="vendor/bootstrap/css/estilo_login.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- LOGIN FORM -->
<div class="text-center " style="padding:50px 0px">
	<div class="logo ">login</div>
	<!-- Main Form -->
	<div class="login-form-1 formulario">
		<form id="login-form" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
					 <img src="usuario.png"  class="img-circle img-thumbnail" />
						<label for="lg_username" class="sr-only">Nombre de Usuario</label> 
                        <input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="Nombre de Usuario">

					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password">
					</div>
					<div class="form-group login-group-checkbox">
						<input type="checkbox" id="lg_remember" name="lg_remember">
						<label for="lg_remember">remember</label>
					</div>
				</div>
               
       <button type="submit" class="login-button" ><i class="fa fa-chevron-right"><b>  <font SIZE=5>></font></b></i></button>
			</div>
			<div class="etc-login-form">
				<p>¿Olvidaste tu contraseña?  <a href="#" data-toggle="modal" data-target="#miModal1">Haga Clic Aquí</a></p>
				<p>¿Nuevo usuario? <a href="#" data-toggle="modal" data-target="#miModal">Crear Nueva Cuenta</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Registro</h4>
			</div>
			<div class="modal-body">
				<!-- REGISTRATION FORM -->
<div class="text-center" style="padding:50px 0">
	
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="register-form" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
					   
						<input type="text" class="form-control" id="reg_username" name="reg_username" placeholder="Primer Nombre ">
					</div>
					<div class="form-group">
					
						<input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="Segundo Nombre ">
					</div>
					
					
					<div class="form-group">
						<label for="reg_email" class="sr-only">Email</label>
						<input type="text" class="form-control" id="reg_email" name="reg_email" placeholder="email">
					</div>
					
					<div class="form-group">
						
						<input type="text" class="form-control" id="reg_fullname" name="reg_fullname" placeholder="Usuario ">
					</div>
					<div class="form-group">
						
						<input type="password" class="form-control" id="reg_password" name="reg_password_confirm" placeholder=" Contraseña">
					</div>
					<div class="form-group">
						
						<input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="Confirmar Contraseña">
					</div>
					
					
					<div class="form-group login-group-checkbox">
						<input type="checkbox" class="" id="reg_agree" name="reg_agree">
						<label for="reg_agree">Estoy de acuerdo con <a href="#">los términos</a></label>
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"><b>  <font SIZE=5>></font></b></i></button>
				
			</div>
			
		</form>
	</div>
	<!-- end:Main Form -->
</div>
			</div>
		</div>
	</div>
</div>


<!-- FORGOT PASSWORD FORM -->

<div class="modal fade" id="miModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">	<div class="logo">Se te olvidó tu contraseña</div></h4>
			</div>
			<div class="modal-body">
				<div class="text-center" style="padding:50px 0">

	<!-- Main Form -->
	<div class="login-form-1">
		<form id="forgot-password-form" class="text-left">
			<div class="etc-login-form">
				<p>El hecho de rellenar su dirección de correo electrónico registrada, se le enviarán las instrucciones para restablecer la contraseña.</p>
			</div>
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="fp_email" class="sr-only">Dirección de correo electrónico</label>
						<input type="text" class="form-control" id="fp_email" name="fp_email" placeholder="Direccion Electonica">
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"><b>  <font SIZE=5>></font></b></i></button>
			</div>
			<div class="etc-login-form">
				<p>¿Ya tienes una cuenta? <a href="#">Haga Clic Aquí</a></p>
				<p><a href="#" data-toggle="modal" data-target="#miModal">Crear Nueva Cuenta</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
			</div>
		</div>
	</div>
</div>

?>
