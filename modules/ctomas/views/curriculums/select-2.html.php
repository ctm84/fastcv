<!DOCTYPE html>

<html lang="es">

<head>
    <link rel="stylesheet" href="css/listarcv.css">
</head>

<body>
    <div class="wrapper">
		<nav>
			<ul id="navigationMenu">
				<li>
					<a class="home" href="#">
						<span>Home</span>
					</a>
				</li>
				
				<li>
					<a class="about" href="#">
						<span>Términos legales</span>
					</a>
				</li>
				
				<li>
					 <a class="services" href="#">
						<span>Ayuda</span>
					 </a>
				</li>
												
				<li>
					<a class="contact" href="#">
						<span>Contacto</span>
					</a>
				</li>
			</ul>
		</nav>
		
		<div id ="nav-aux">
			<div id="nav-trigger">
				<span>Menu</span>
			</div>
			<nav id="nav-main">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Términos legales</a></li>
					<li><a href="">Ayuda</a></li>
					<li><a href="">Contacto</a></li>
				</ul>
			</nav>
			<nav id="nav-mobile"></nav>
		</div>	
		
        <main>
            <section class="module content">
                <div class="container">
                    <h2 class="title">Tus CV</h2>

                    <div class="table">

                        <div class="row">
                            <div class="cell th">
                                Nombre CV
                            </div>
                            <div class="cell th">
                                Última modificación
                            </div>
                            <div class="cell colcell th">
                                Opciones
                            </div>
                        </div>

                        <div class="row">
                            <div class="cell">
                                <a href="#modal1">CVHostelería</a>
                            </div>
                            <div class="cell">
                                22/05/2015
                            </div>
                            <div class="cell">
                                <button type="button" title="Editar CV">
                                    <img src="img/listarcv/editcv.png">
                                </button>

                                <button type="button" title="Copiar CV">
                                    <img src="img/listarcv/copy.png">
                                </button>

                                <button type="button" title="Eliminar CV">
                                    <img src="img/listarcv/deletecv.png">
                                </button>

                                <button type="button" title="Descargar CV en PDF">
                                    <img src="img/listarcv/pdfico.png">
                                </button>
                            </div>
                        </div>				

                        <div class="row">
                            <div class="cell">
                                 <a href="#modal1">Socorrista</a>
                            </div>

                            <div class="cell">
                                12/04/2015
                            </div>
                            <div class="cell">
                                <button type="button" title="Editar CV">
                                    <img src="img/listarcv/editcv.png">
                                </button>

                                <button type="button" title="Copiar CV">
                                    <img src="img/listarcv/copy.png">
                                </button>

                                <button type="button" title="Eliminar CV">
                                    <img src="img/listarcv/deletecv.png">
                                </button>

                                <button type="button" title="Descargar CV en PDF">
                                    <img src="img/listarcv/pdfico.png">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div id="nuevocv" title="Nuevo CV"></div>

                    <form name="nuevocvform" class="form" id="nuevocvform">

                        <p>
                            <label for="nombrecv">Nombre del CV</label>
                            <input maxlength="30" type="text" id="nombrecv" name="nombrecv" placeholder='Ejemplo: "CV para hoteles"' value="" />
                        </p>

                        <p>
                            <input class="buttom" type="submit" value="Crear">
                        </p>
                    </form>
                </div>
            </section>

            <section class="module content">
                <div class="container consejos">
                    <h2 class="title">Algunos consejos</h2>
                    <ul>
                        <li>Cuida la ortografía, las faltas ortográficas dan muy mala imagen. Revisa el currículum para corregir posibles errores.</li>
                        <li>Pon primero las experiencias laborales más recientes, usualmente son las que más interesan a los seleccionadores.</li>
                        <li>Procura personalizar el currículum para cada empresa, destacando las experiencias y cualidades más relacionadas con el puesto al que optas.</li>
                        <li>Si adjuntas una fotografía debería ser lo más reciente posible.</li>
						<li>Si tienes alguna duda sobre el funcionamiento del generador puedes visitar la sección de <a href="#">ayuda</a>.</li>
                    </ul>
                </div>
            </section>
			
			<section id="modal1" class="modalmask module selectstyle">
				<div class="modalbox movedown container">
					<a href="#close" title="Close" class="close">X</a>
					<h3 class="sub-title">Elige un estilo</h2>
					<form name="contacto" class="form">
						<ul>
							<li><label for="clasico">Clásico</label></li>
							<li><input type="radio" name="estilo" value="Clásico"/></li>
							<li><label for="elegante">Elegante</label></li>
							<li><input type="radio" name="estilo" value="Elegante"/></li>
						</ul>
						<p> <input class="buttom" type="submit" id="submit-estilo" name="submit" value="Elegir"/> </p>
					</form>	
				</div>
			</section>
        </main>
        <!-- /main -->

    </div>
    <!-- /#wrapper -->

    <!-- js -->
    <script src="http://code.jquery.com/jquery-1.9.0.min.js" type="text/javascript"></script>
    <script src="/assets/js/listarcv.js"></script>
	<script src="/assets/js/navbarauxiliar.js"></script>
	
</body>

</html>