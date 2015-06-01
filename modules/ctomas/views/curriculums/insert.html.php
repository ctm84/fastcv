<!DOCTYPE html>

<html lang="es">

<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1.0" name="viewport">
    <title>FastCV Nuevo CV</title>

    <!-- css -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab">
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/nuevocv.css">
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

        <nav class="info-bar">
            <a class="icon cmn-home" data-title="Volver al main" href="#"></a>
			<a class="icon cmn-datos" data-title="Datos" href="#datos"></a>
            <a class="icon cmn-experiencia " data-title="Experiencia" href="#experiencia"></a>
            <a class="icon cmn-formacion" data-title="Formación" href="#formacion"></a>
            <a class="icon cmn-idiomas" data-title="Idiomas" href="#idiomas"></a>
            <a class="icon cmn-capacidades" data-title="Capacidades" href="#capacidades"></a>
			<a class="icon cmn-previa" data-title="Vista previa" href="#"></a> <!-- abrir en ventana nueva -->
        </nav>

        <main>

            <section class="module parallax parallax-1">
                <div class="container punteado">
                    <h1>Datos</h1>
                </div>
            </section>

            <section class="module content" id="datos">
			
                <div class="container">
                    <h2 class="title">Datos personales</h2>
					<form name="datos-personales" class="form">
							<p>
								<label for="nombre">Nombre</label>
								<input maxlength="50" type="text" id="nombre" name="nombre" value="" />
                       		</p>
							
							<p>
								<label for="apellidos">Apellidos</label>
								<input maxlength="60" type="text" id="apellidos" name="apellidos" value="" />
							</p>
                       		
							<p>							
								<label for="f_nacimiento">Fecha de nacimiento</label>
								<input maxlength="10" type="date" id="f_nacimiento" name="nombre" value="" />
							</p>
							
							<p>
								<label for="gender">Genero</label>
								<select  id="gender" name="gender">
									<option value="" selected="selected">- Selecciona -</option>
									<option value="hombre">Hombre</option>
									<option value="mujer">Mujer</option>
								</select>
							</p>
							
							<p>
								<label for="estado_civil">Estado civil</label>
								<select  id="estado_civil" name="estado_civil">
									<option value="" selected="selected">- Selecciona -</option>
									<option value="soltero">Soltero/a</option>
									<option value="casado">Casado/a</option>
									<option value="divorciado">Divorciado/a</option>
									<option value="viudo">Viudo/a</option>
								</select>
							</p>
							
							<p>
								<input class="buttom" type="submit" value="Enviar">
							</p>
					</form>
				</div>
				
				<div class="container">
                    <h2 class="title">Datos  de contacto</h2>
					<form name="datos-contacto" class="form">
					
						<p>
							<label for="direccion">Dirección</label>
							<input maxlength="80" type="text" id="direccion" name="direccion" value="" />
						</p>	
						
						<p>
							<label for="cp">Codigo Postal</label>
							<input maxlength="5" type="number" id="cp" name="cp"  value="" />
						</p>

						<p>
							<label for="poblacion">Población</label>
							<input maxlength="50" type="text" id="poblacion" name="poblacion" value="" />
						</p>
						
						<p>
							<label for="provincia">Provincia</label>
							<input maxlength="30" type="text" id="provincia" name="provincia" value="" />
						</p>	
						
						<p>
							<label for="pais">País</label>
							<input maxlength="30" type="text" id="pais" name="pais" value="" />
						</p>	
						
						<p>
							<label for="telefono">Teléfono</label>
							<input maxlength="15" type="tel" id="telefono" name="telefono" value="" />
						</p>	
						
						<p>
							<label for="email">Correo</label>
							<input maxlength="255" type="email" id="email" name="email" value="" />
						</p>
						
						<p>
							<input class="buttom" type="submit" value="Enviar">
						</p>	
					</form>
                </div>
				
				<div class="container">
                    <h2 class="title">Otros datos</h2>
					<form name="datos-otros" class="form" enctype="multipart/form-data">
							
							<p>
								<label for="perfil">Perfil</label>
								<textarea id="perfil" name="perfil" placeholder='Un breve resumen, por ejemplo: "Me defino como una persona trabajadora y responsable con inquietud por seguir formándome."'></textarea>
							</p>
							
							<p>
								<label for="foto">Foto</label>
								<input type="file" id="foto" name="foto"/>
							</p>	
                       		
							<p>							
								<input class="buttom" type="submit" value="Enviar">
							</p>	
					</form>
				</div>
				
            </section>

            <section class="module parallax parallax-2">
                <div class="container punteado">
                    <h1>Experiencia</h1>
                </div>
            </section>

            <section class="module content" id="experiencia">
                <div class="container">
                    <h2 class="title">Introduce una experiencia</h2>
					<form name="experiencia" class="form">
					
						<p>
							<label for="empresa">Nombre de la empresa</label>
							<input maxlength="60" type="text" id="empresa" name="empresa" value="" />
						</p>	
						

						<p>
							<label for="poblacion-emp">Población</label>
							<input maxlength="50" type="text" id="poblacion-emp" name="poblacion-emp" value="" />
						</p>
						
						<p>
							<label for="provincia-emp">Provincia</label>
							<input maxlength="30" type="text" id="provincia-emp" name="provincia-emp" value="" />
						</p>	
						
						<p>
							<label for="pais-emp">País</label>
							<input maxlength="30" type="text" id="pais-emp" name="pais-emp" value="" />
						</p>	
						
						<p>
							<label for="puesto">Puesto desempeñado</label>
							<input maxlength="50" type="text" id="puesto" name="puesto" value="" />
						</p>	
						
						<p>
							<label for="funciones">Funciones</label>
							<textarea id="funciones" name="funciones" placeholder='Enumera las funciones que desempeñabas, por ejemplo: "Atención telefónica, archivo de documentación, control de stocks."'></textarea>
						</p>
						
						<p>
							<label for="f_inicio">Fecha de início</label>
							<input type="month" id="f_inicio" name="f_inicio">
						</p>
						
						<p>
							<label for="f_fin">Fecha de finalización</label>
							<input type="month" id="f_fin" name="f_fin">
						</p>
						
						<p>
							<input class="buttom" type="submit" value="Enviar">
						</p>	
					</form>
                </div>
            </section>

            <section class="module parallax parallax-3">
                <div class="container punteado">
                    <h1>Formación</h1>
                </div>
            </section>

            <section class="module content" id="formacion">
                <div class="container">
                    <h2 class="title">Introduce una formación</h2>
					<form name="formacion" class="form">
					
						<p>
							<label for="titulacion">Nombre de la titulación</label>
							<input maxlength="100" type="text" id="titulacion" name="titulacion" placeholder='Por ejemplo "Grado en Relaciones Laborales"' value="" />
						</p>	
						

						<p>
							<label for="nivel">Nivel</label>
							<select  id="nivel" name="nivel">
								<option value="" selected="selected">- Selecciona -</option>
								<option value="Primarios">Primaria</option>
								<option value="Secundarios">Secundaria (E.S.O./Graduado) o equivalente</option>
								<option value="Postobligatorios">Bachillerato/C.O.U. o Grado Medio/F.P.1 o equivalentes</option>
								<option value="C.Profesionalidad">Certificado de profesionalidad o equivalente</option>
								<option value="SuperioresFP">Ciclo Formativo Superior/F.P.2 o equivalente</option>
								<option value="Universitarios1">Grado/Diplomatura/I.Técnica o equivalentes</option>
								<option value="Universitarios2">Master/Licenciatura/Ingeniería o equivalentes</option>
								<option value="Doctorado">Doctorado</option>
								<option value="Otros">Otros estudios</option>
							</select>
						</p>
						
						<p>
							<label for="centro">Nombre del centro</label>
							<input maxlength="60" type="text" id="centro" name="empresa" placeholder='Por ejemplo "Universidad Complutense de Madrid"' value="" />
						</p>	
						
						<p>
							<label for="poblacion-for">Población</label>
							<input maxlength="50" type="text" id="poblacion-for" name="poblacion-efor" value="" />
						</p>
						
						<p>
							<label for="provincia-for">Provincia</label>
							<input maxlength="30" type="text" id="provincia-for" name="provincia-for" value="" />
						</p>	
						
						<p>
							<label for="pais-for">País</label>
							<input maxlength="30" type="text" id="pais-for" name="pais-for" value="" />
						</p>	
						
						<p>
							<label for="a_inicio">Año de inicio</label>
							<input type="number" id="a_inicio" name="a_inicio">
						</p>
						
						<p>
							<label for="a_fin">Año de finalización</label>
							<input type="number" id="a_fin" name="a_fin">
						</p>
						
						<p>
							<input class="buttom" type="submit" value="Enviar">
						</p>	
					</form>
                </div>
            </section>

            <section class="module parallax parallax-4">
                <div class="container punteado">
                    <h1>Idiomas</h1>
                </div>
            </section>

            <section class="module content" id="idiomas">
                <div class="container">
                    <h2 class="title">Introduce un idioma</h2>
					<form name="idiomas" class="form">
					
						<p>
							<label for="idioma">Nombre del idioma</label>
							<input maxlength="30" type="text" id="idioma" name="idioma" value="" />
						</p>	
						

						<p>
							<label for="com_oral">Comprensión oral</label>
							<select id="com_oral" name="com_oral">
								<option value="" selected="selected">- Selecciona -</option>
								<option value="A1">Básico (A1)</option>
								<option value="A2">Básico (A2)</option>
								<option value="B1">Intermedio (B1)</option>
								<option value="B2">Intermedio alto (B2)</option>
								<option value="C1">Dominio operativo eficaz (C1)</option>
								<option value="C2">Maestría (C2)</option>
								<option value="Nativo">Nativo</option>
							</select>
						</p>
						
						<p>
							<label for="com_escrita">Comprensión escrita</label>
							<select id="com_escrita" name="com_escrita">
								<option value="" selected="selected">- Selecciona -</option>
								<option value="A1">Básico (A1)</option>
								<option value="A2">Básico (A2)</option>
								<option value="B1">Intermedio (B1)</option>
								<option value="B2">Intermedio alto (B2)</option>
								<option value="C1">Dominio operativo eficaz (C1)</option>
								<option value="C2">Maestría (C2)</option>
								<option value="Nativo">Nativo</option>
							</select>
						</p>	
						
						<p>
							<label for="exp_oral">Expresión oral</label>
							<select id="exp_oral" name="exp_oral">
								<option value="" selected="selected">- Selecciona -</option>
								<option value="A1">Básico (A1)</option>
								<option value="A2">Básico (A2)</option>
								<option value="B1">Intermedio (B1)</option>
								<option value="B2">Intermedio alto (B2)</option>
								<option value="C1">Dominio operativo eficaz (C1)</option>
								<option value="C2">Maestría (C2)</option>
								<option value="Nativo">Nativo</option>
							</select>
						</p>	
						
						<p>
							<label for="exp_escrita">Expresión escrita</label>
							<select id="exp_escrita" name="exp_escrita">
								<option value="" selected="selected">- Selecciona -</option>
								<option value="A1">Básico (A1)</option>
								<option value="A2">Básico (A2)</option>
								<option value="B1">Intermedio (B1)</option>
								<option value="B2">Intermedio alto (B2)</option>
								<option value="C1">Dominio operativo eficaz (C1)</option>
								<option value="C2">Maestría (C2)</option>
								<option value="Nativo">Nativo</option>
							</select>
						</p>	
						
						<p>
							<input class="buttom" type="submit" value="Enviar">
						</p>	
					</form>
                </div>
            </section>

            <section class="module parallax parallax-5">
                <div class="container punteado">
                    <h1>Capacidades</h1>
                </div>
            </section>

            <section class="module content" id="capacidades">
               <section class="module content" id="experiencia">
			   
                <div class="container">
                    <h2 class="title">Introduce una capacidad</h2>
					<form name="capacidades" class="form">
					
						<p>
							<label for="capacidad">Nombre de la capacidad</label>
							<input maxlength="60" type="text" id="capacidad" name="capacidad" placeholder='Ejemplo:"Mecanografía"' value="" />
						</p>	
						

						<p>
							<label for="descripcion">Descripción</label>
							<textarea id="descripcion" name="descripcion" placeholder='Breve explicación de la capacidad, por ejemplo para Mecanografía: "400 pulsaciones" o para Ofimática "Paquete Office: Word, Excel, Access y PowerPoint, nivel avanzado"'></textarea>
						</p>
						
						<p>
							<input class="buttom" type="submit" value="Enviar">
						</p>
					</form>	
					
					<div class="container">
                    <h2 class="title">Otros datos de interés</h2>
					<form name="otrosdatos" class="form">	
						<p>
							<label for="otros">Otros datos</label>
							<textarea id="otros" name="otros" placeholder='Añade de una sola vez  otra información que creas relevante, por ejemplo "Licencia de conducción B y C. Disponibilidad horaria y geográfica. Carné de manipulador de alimentos" '></textarea>
						</p>
						
						<p>
							<input class="buttom" type="submit" value="Enviar">
						</p>
					</form>	
                </div>
                </div>
            </section>

        </main>
        <!-- /main -->
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
					<small><a href="#">Privacidad</a></small>
				</div>
            </div>
        </footer>
        <!-- /footer -->

    </div>
    <!-- /#wrapper -->

    <!-- js -->
</body>

</html>