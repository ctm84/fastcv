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
					<a id="logo-header" href="http://miweb.local/index">Fast CV</a>
				</div>
                <div class="sesion">
                    <small>Bienvenido Nombre</small>
                    <small>
				        <ul>
				            <li>
								
								<span id="padlock"></span>
								<a href="#">Cerrar Sesion</a>
							</li>
				        </ul>
				    </small>
                </div>
            </div>
        </header>
            <?= $navbars ?>        
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
					<small><a href="http://miweb.local/contacto">Contacto</a></small>
					<small>|</small>
					<small><a href="http://miweb.local/legal">Términos legales</a></small>
                    <small>|</small>
                    <small><a href="http://miweb.local/ayuda">Ayuda</a></small>
				</div>
            </div>
        </footer>
    </div>
    
     <!-- js -->
    <script src="/assets/vendor/jquery-1.9.1.min.js"></script>
    <script src="/assets/js/navbarauxiliar.js"></script>
    <script src="/assets/js/fastcv.js"></script>
    
</body>

</html>