<!DOCTYPE html>

<html lang="es">

<head>
    <link rel="stylesheet" href="/assets/css/listarcv.css">
</head>

<body>
    <div class="principal">
		<section class="module content">
			<div class="container">
				<h2 class="title">Tus CV</h2>

				<div class="table">
                 <?php foreach($datos as $rows): ?>    
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
							<a href="#modal1"><?= $rows['alias'] ?></a>
						</div>
						<div class="cell">
							<?= $rows['f_creacion'] ?>
						</div>
						<div class="cell">
                            
							<span class="button">
                                <a  href="/curriculums/update/id/<?= $rows['id']?>"  title="Editar CV">
								    <img src="/assets/img/listarcv/editcv.png">
							     </a>
                            </span>

							<span class="button">
                                <a href="#"  title="Copiar CV">
								    <img src="/assets/img/listarcv/copycv.png">
							     </a>
                            </span>

							<span class="button">
                                <a href="/curriculums/delete/id/<?= $rows['id']?>"  title="Eliminar CV">
								    <img src="/assets/img/listarcv/deletecv.png">
							     </a>
                            </span>

							<span class="button">
                                <a href="#"  title="Descargar CV en PDF">
								    <img src="/assets/img/listarcv/pdfico.png">
							     </a>
                            </span>
						</div>
					</div>
                    <?php endforeach; ?>
				</div>
			</div>

			<div class="container">
				<div id="nuevocv" title="Nuevo CV"></div>

				<form name="nuevocvform" class="form" id="nuevocvform" method="post" action="/curriculums/insert">

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
					<li>Si tienes alguna duda sobre el funcionamiento del generador puedes visitar la sección de <a href="/ayuda">ayuda</a>.</li>
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
    </div>
    <!-- /principal -->
</body>
</html>
