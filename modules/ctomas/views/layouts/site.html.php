<<<<<<< HEAD
=======
<?php
    require_once('../modules/ctomas/controllers/sesion.php'); 
    $sesion = new sesion();
    $sesion ->init(); 
?>

>>>>>>> f741ed5c413c7f3e3e5d4376c93f9f9c97c9bb44
<!DOCTYPE html>

<html lang="es">

<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1.0" name="viewport">
    <title>FastCV</title>

    <!-- css -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab">
    <link rel="stylesheet" href="/assets/css/site.css">
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="/assets/img/core/favicon.png" type="image/png" />
</head>

<body>
	<div class="wrapper">
	
		<header>
            <div class="container">
				<div class="logo">
					<a id="logo-header" href="/index">Fast CV</a>
				</div>
                <div class="sesion">
                    <small>
				        <ul>
				            <li>
                                <?php  
                                    if (isset($_SESSION["correo_usuario"])) {
                                        echo "Sesion: " . $_SESSION['correo_usuario'];
                                    }else{
                                        echo "No has iniciado sesión";
                                    }
                                ?>
                            </li>
				        </ul>
				    </small>
                    <small>
				        <ul>
				            <li>
                                <?php  
                                    if (isset($_SESSION["correo_usuario"])) {
<<<<<<< HEAD
                                        echo "<span id='padlock'></span> <a href='/usuarios/logout'>Cerrar Sesion</a>";
=======
                                        echo "<span id='padlock'></span> <a href='sesion/destroy'>Cerrar Sesion</a>";
>>>>>>> f741ed5c413c7f3e3e5d4376c93f9f9c97c9bb44
                                    }else{
                                        echo "<a href='/usuarios/insert'>Iniciar Sesion</a>";
                                    }
                                ?>
							</li>
				        </ul>
				    </small>
                </div>
            </div>
        </header>
		
		<main>
			<?= $content ?>
        </main>
       
       <footer>
            <div class="container">
                <div class="copyright">
					<small>FastCV  &copy; 2015</small> 
                </div>
			</div>
			
			<div class="container">
				<div class="contact-privacy">
					<small><a href="/contacto">Contacto</a></small>
					<small>|</small>
					<small><a href="/legal">Términos legales</a></small>
                    <small>|</small>
                    <small><a href="/ayuda">Ayuda</a></small>
				</div>
            </div>
        </footer>
    </div>
    
    <!-- js -->
    <script src="/assets/vendor/jquery-1.9.1.min.js"></script>
    <script src="/assets/js/fastcv.js"></script>
    
</body>

</html>