<!DOCTYPE html>

<html lang="es">

<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1.0" name="viewport">
    <title>FastCV Registro</title>

    <!-- css -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab">
    <link rel="stylesheet" href="css/site.css">
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/core/favicon.png" type="image/png" />
</head>

<body>
    <div class="wrapper">
       <header>
            <div class="container">
				<div class="logo">
					<img src="img/core/fastcompact.png">
				</div>
                <div class="sesion">
                    <small>Bienvenido Nombre</small>
                    <small>
				        <ul>
				            <li>
								<img src="img/core/sesion.png">
								<a href="#">Cerrar Sesion</a>
							</li>
				        </ul>
				    </small>
                </div>
            </div>
        </header>

        <main>
            <section class="module content">
                <div class="container" id="logearse">
                    <h2 class="title">Iniciar sesión</h2>
                    <form name="login" class="form">
                        <p>
                            <label for="text-email1">Correo electrónico</label>
                            <input type="email" id="text-email1" name="email" class="text" maxlength="100" value="" required />
                        </p>
                        <p>
                            <label for="imppass2">Contraseña</label>
                            <input type="password" id="imppass2" name="password" value="" required />
                        </p>
                        <p>
                            <input class="buttom" type="submit" id="submit-login" name="submit" value="Iniciar sesión" />
                        </p>
						
						<p>
							<a href="#">¿Has olvidado tu contraseña?</a>
						</p>
                    </form>
                </div>
            </section>

            <section class="module content">
                <div class="container" id="registrarse">
                    <h2 class="title">¿Todavía no eres miembro? Regístrate.</h2>
                    <form name="signup" class="form">
                        <p>
                            <label for="impmail">Correo electrónico</label>
                            <input type="email" id="impmail" name="email" maxlength="100" value="" required />
                        </p>
                        <p>
                            <label for="imppass">Contraseña</label>
                            <input type="password" id="imppass" name="password" value="" required pattern="[A-Za-z0-9!?-]{6,20}" title="La contraseña debe tener como mínimo 6 caráctres y como máximo 20" placeholder="Entre 6 y 20 carácteres" />
                        </p>
                        <p>
                            <label for="imppassconfirm">Confirmar contraseña</label>
                            <input type="password" id="imppassconfirm" name="password_confirm" value="" required />
                        </p>
                        <p>
                            <input class="buttom" type="submit" id="submit-signup" name="submit" value="Registrarse" />
                        </p>
                    </form>
                </div>
            </section>
        </main>

        <footer>
            <div class="container">
                <div class="copyright">
					<small>FastCV  &copy; 2015</small> 
                </div>
			</div>
			
			<div class="container">
				<div class="contact-privacy">
					<small><a href="#">Contacto</a></small>
					<small>|</small>
					<small><a href="#">Términos legales</a></small>
				</div>
            </div>
        </footer>
    </div>
	
	<!-- js -->
    
    <script src="js/registro.js"></script>
</body>

</html>