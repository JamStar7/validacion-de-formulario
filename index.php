<?php
include("validateLogin.php");
include("validateRegister.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">



    <title>formulario</title>
</head>
<body>
<h2>Creacion de formulario de cuenta</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="index.php" method="POST" >
			<h1>Crear cuenta</h1>
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> -->
			<!-- <span>or use your email for registration</span> -->
			<input type="text" placeholder="Name" name="name" required/>
          
			<input type="email" placeholder="Email" name="email" required/>
         
			<input type="password" placeholder="Password" name="password" />
			<button type="submit">Registrate</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="index.php" method="GET">
			<h2>Inicie sesión</h2>
                        <!-- <div class="social-container">
                            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </div> -->
			<!-- <span>or use your account</span> -->
			<input type="email" placeholder="Email" name="email" required />
			<input type="password" placeholder="Password" name="password" required />
			<a href="#">Olvidaste tu contraseña?</a>
			<button type="submit">Iniciar Sesión</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bienvenido</h1>
				<p>Para mantenerte en contacto con nosotros, inicia sesión con tus datos personales</p>
				<button class="ghost" id="signIn">Iniciar Sesión</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hola Luis</h1>
				<p>Introduzca sus datos personales y empiece a viajar con nosotros</p>
				<button class="ghost" id="signUp">Registrate</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Creado por Esteban -
		Desafiando a Ramphis y a Julio >:D
		<!-- <a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>. -->
	</p>
</footer>
<script src="app.js"></script>
</body>
</html>