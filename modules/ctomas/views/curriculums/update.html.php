<!DOCTYPE html>

<html lang="es">

<head>
    <link rel="stylesheet" href="/assets/css/nuevocv.css">
</head>

<body>
    <div class="principal">

        <section class="module parallax parallax-1">
            <div class="container punteado">
                <h1>Datos</h1>
            </div>
        </section>

        <section class="module content" id="datos">
            <?php foreach ($datos->usuario as $usuario):?>

            <div class="container">
                <form name="datos-personales" class="form" method="post">
                    <h2 class="title">Datos personales</h2>
                    <p>
                        <label for="nombre">Nombre</label>
                        <input maxlength="50" type="text" id="nombre" name="nombre" required value="<?= $usuario['nombre'] ?> " />
                    </p>

                    <p>
                        <label for="apellidos">Apellidos</label>
                        <input maxlength="60" type="text" id="apellidos" name="apellidos" required value="<?= $usuario['apellidos'] ?> " />
                    </p>

                    <p>
                        <label for="f_nacimiento">Fecha de nacimiento</label>
                        <input maxlength="10" type="date" id="f_nacimiento" name="f_nacimiento" value="<?= $usuario['f_nacimiento'] ?>" />
                    </p>

                    <p>
                        <label for="gender">Genero</label>
                        <select id="gender" name="gender">
                            <option value="" selected="selected">- Selecciona -</option>
                            <option value="hombre" <?=($usuario[ 'genero']=='hombre' )? 'selected="selected"': '';?>>Hombre</option>
                            <option value="mujer" <?=($usuario[ 'genero']=='mujer' )? 'selected="selected"': '';?>>Mujer</option>
                        </select>
                    </p>

                    <p>
                        <label for="estado_civil">Estado civil</label>
                        <select id="estado_civil" name="estado_civil">
                            <option value="" selected="selected">- Selecciona -</option>
                            <option value="soltero" <?=($usuario[ 'estado_civil']=='Soltero' )? 'selected="selected"': '';?> />Soltero/a</option>
                            <option value="casado" <?=($usuario[ 'estado_civil']=='Casado' )? 'selected="selected"': '';?> />Casado/a</option>
                            <option value="divorciado" <?=($usuario[ 'estado_civil']=='Divorciado' )? 'selected="selected"': '';?>>Divorciado/a</option>
                            <option value="viudo" <?=($usuario[ 'estado_civil']=='Viudo' )? 'selected="selected"': '';?>>Viudo/a</option>
                        </select>
                    </p>
            
                    <h2 class="title">Datos  de contacto</h2>

                    <p>
                        <label for="direccion">Dirección</label>
                        <input maxlength="80" type="text" id="direccion" name="direccion" value="<?= $usuario['direccion'] ?>" />
                    </p>

                    <p>
                        <label for="cp">Codigo Postal</label>
                        <input maxlength="5" type="number" id="cp" name="cp" value="<?= $usuario['cp'] ?>" />
                    </p>

                    <p>
                        <label for="poblacion">Población</label>
                        <input maxlength="50" type="text" id="poblacion" name="poblacion" value="<?= $usuario['poblacion'] ?>" />
                    </p>

                    <p>
                        <label for="provincia">Provincia</label>
                        <input maxlength="30" type="text" id="provincia" name="provincia" value="<?= $usuario['provincia'] ?>" />
                    </p>

                    <p>
                        <label for="pais">País</label>
                        <input maxlength="30" type="text" id="pais" name="pais" value="<?= $usuario['pais'] ?>" />
                    </p>

                    <p>
                        <label for="telefono">Teléfono</label>
                        <input maxlength="15" type="tel" id="telefono" name="telefono" required value="<?= $usuario['telefono'] ?>" />
                    </p>

                    <p>
                        <label for="email">Correo</label>
                        <input maxlength="255" type="email" id="email" name="email" required value="<?= $usuario['correo'] ?>" />
                    </p>
               
                    <h2 class="title">Sobre tí</h2>

                    <p>
                        <label for="perfil">Perfil</label>
                        <textarea id="perfil" name="perfil" required placeholder='Un breve resumen, por ejemplo: "Me defino como una persona trabajadora y responsable con inquietud por seguir formándome."'>
                            <?=$usuario['perfil'] ?>
                        </textarea>
                    </p>

                    <p>
                        <input class="buttom" type="submit" value="Enviar">
                    </p>
                </form>
            </div>

            <?php endforeach; ?>
        </section>
        
        <section class="module content" id="datos-foto">
            <div class="container">
                <form name="subirfoto" class="form" method="post" action="/curriculums/uploadphoto/" enctype="multipart/form-data">
                    <p>
                        <label for="foto">Foto para el C.V.</label>
                        <input type="file" id="foto" name="foto" accept="image/.jpg,.png"/>
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
            <?php foreach ($datos->experiencia as $experiencia):?>

            <div class="container">
                <form name="experiencia" class="form" method="post" action="/experiencia/update/exp/<?= $experiencia['codigo'] ?>/cv/<?= $experiencia['id_curriculum'] ?>">
                    
                    <h2 class="title"><?= $experiencia['empresa'] ?></h2>

                    <p>
                        <label for="empresa">Nombre de la empresa</label>
                        <input maxlength="60" type="text" id="empresa" name="empresa" required value="<?= $experiencia['empresa'] ?>" />
                    </p>


                    <p>
                        <label for="poblacion-emp">Población</label>
                        <input maxlength="50" type="text" id="poblacion-emp" name="poblacion-emp" value="<?= $experiencia['poblacion'] ?>" />
                    </p>

                    <p>
                        <label for="provincia-emp">Provincia</label>
                        <input maxlength="30" type="text" id="provincia-emp" name="provincia-emp" value="<?= $experiencia['provincia'] ?>" />
                    </p>

                    <p>
                        <label for="pais-emp">País</label>
                        <input maxlength="30" type="text" id="pais-emp" name="pais-emp" value="<?= $experiencia['pais'] ?>" />
                    </p>

                    <p>
                        <label for="puesto">Puesto desempeñado</label>
                        <input maxlength="50" type="text" id="puesto" name="puesto" required value="<?= $experiencia['puesto'] ?>" />
                    </p>

                    <p>
                        <label for="funciones">Funciones</label>
                        <textarea id="funciones" name="funciones" required placeholder='Enumera las funciones que desempeñabas, por ejemplo: "Atención telefónica, archivo de documentación, control de stocks."'>
                            <?=$experiencia['funciones'] ?>
                        </textarea>
                    </p>

                    <p>
                        <label for="f_inicio">Fecha de início</label>
                        <input type="text" maxlength="50" id="f_inicio" name="f_inicio" placeholder='Por Ejemplo: abril de 2012' required  value="<?= $experiencia['f_inicio'] ?>">
                    </p>

                    <p>
                        <label for="f_fin">Fecha de finalización</label>
                        <input type="text" maxlength="50" id="f_fin"  name="f_fin" placeholder='Por Ejemplo: junio de 2015' required value="<?= $experiencia['f_fin'] ?>">
                    </p>

                    <p>
                        <input class="buttom" type="submit" value="Enviar">
                        <a class="eliminarform" href="/experiencia/delete/exp/<?= $experiencia['codigo'] ?>/cv/<?= $experiencia['id_curriculum'] ?>">Eliminar</a>
                    </p>
                </form>
            </div>
            <hr>
            
            <?php endforeach; ?>
        </section>
        
        <section class="module content" id="nuevaexp">
            <div class="container">
                <form name="nuevaexpform" class="form nuevoform" method="post" action="/experiencia/insert/cv/<?=FrontController::getInstance()->request[3]["id"]?>">
                    <h3 class="sub-title">Añadir experiencia</h3>
                    <p>
                        <label for="nombrecv">Nombre de la empresa</label>
                        <input maxlength="50" type="text" id="empresa" name="empresa" placeholder='Por Ejemplo: Frankerts S.A.' required value="" />
                    </p>

                    <p>
                        <input class="buttom" type="submit" value="Crear">
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
            <?php foreach ($datos->formacion as $formacion):?>

            <div class="container">
                <form name="formacion" class="form" method="post" action="/formacion/update/forma/<?= $formacion['codigo'] ?>/cv/<?= $formacion['id_curriculum'] ?>">
                    <h2 class="title"><?= $formacion['titulacion'] ?></h2>
                    <p>
                        <label for="titulacion">Nombre de la titulación</label>
                        <input maxlength="100" type="text" id="titulacion" name="titulacion" required placeholder='Por ejemplo "Grado en Relaciones Laborales"' value="<?= $formacion['titulacion'] ?>" />
                    </p>


                    <p>
                        <label for="nivel">Nivel</label>
                        <select id="nivel" name="nivel">
                            <option value="" selected="selected">- Selecciona -</option>
                            <option value="Primarios" <?=($formacion['nivel']=='Primarios')? 'selected="selected"': '';?>>Primaria</option>
                            <option value="Secundarios" <?=($formacion['nivel']=='Secundarios')? 'selected="selected"': '';?>>Secundaria (E.S.O./Graduado) o equivalente</option>
                            <option value="Postobligatorios" <?=($formacion['nivel']=='Postobligatorios')? 'selected="selected"': '';?>>Bachillerato/C.O.U. o Grado Medio/F.P.1 o equivalentes</option>
                            <option value="C.Profesionalidad" <?=($formacion['nivel']=='C.Profesionalidad')? 'selected="selected"': '';?>>Certificado de profesionalidad o equivalente</option>
                            <option value="SuperioresFP" <?=($formacion['nivel']=='SuperioresFP')? 'selected="selected"': '';?>>Ciclo Formativo Superior/F.P.2 o equivalente</option>
                            <option value="Universitarios1" <?=($formacion['nivel']=='Universitarios1')? 'selected="selected"': '';?>>Grado/Diplomatura/I.Técnica o equivalentes</option>
                            <option value="Universitarios2" <?=($formacion['nivel']=='Universitarios2')? 'selected="selected"': '';?>>Master/Licenciatura/Ingeniería o equivalentes</option>
                            <option value="Doctorado" <?=($formacion['nivel']=='Doctorado')? 'selected="selected"': '';?>>Doctorado</option>
                            <option value="Otros">Otros estudios</option>
                        </select>
                    </p>

                    <p>
                        <label for="centro">Nombre del centro</label>
                        <input maxlength="60" type="text" id="centro" name="centro" required placeholder='Por ejemplo "Universidad Complutense de Madrid"' value="<?= $formacion['centro'] ?>" />
                    </p>

                    <p>
                        <label for="poblacion-for">Población</label>
                        <input maxlength="50" type="text" id="poblacion-for" name="poblacion-for" value="<?= $formacion['poblacion'] ?>" />
                    </p>

                    <p>
                        <label for="provincia-for">Provincia</label>
                        <input maxlength="30" type="text" id="provincia-for" name="provincia-for" value="<?= $formacion['provincia'] ?>" />
                    </p>

                    <p>
                        <label for="pais-for">País</label>
                        <input maxlength="30" type="text" id="pais-for" name="pais-for" value="<?= $formacion['pais'] ?>" />
                    </p>

                    <p>
                        <label for="a_inicio">Año de inicio</label>
                        <input type="number" id="a_inicio" name="a_inicio" required value="<?= $formacion['a_inicio'] ?>"/>
                    </p>

                    <p>
                        <label for="a_fin">Año de finalización</label>
                        <input type="number" id="a_fin" name="a_fin" required value="<?= $formacion['a_fin'] ?>"/>
                    </p>

                    <p>
                        <input class="buttom" type="submit" value="Enviar"/>
                        <a class="eliminarform" href="/formacion/delete/forma/<?= $formacion['codigo'] ?>/cv/<?= $formacion['id_curriculum'] ?>">Eliminar</a>
                    </p>
                </form>
            </div>
            <hr>
            
            <?php endforeach; ?>
        </section>

        <section class="module content" id="nuevaforma">
            <div class="container">
                <form name="nuevaformaform"  class="form nuevoform" method="post" action="/formacion/insert/cv/<?=FrontController::getInstance()->request[3]["id"]?>">
                    <h3 class="sub-title">Añadir formación</h3>
                    <p>
                        <label for="nombrecv">Nombre de la formación</label>
                        <input maxlength="50" type="text" id="formacion" name="formacion" placeholder='Por Ejemplo: Licenciatura en Periodismo' required value="" />
                    </p>

                    <p>
                        <input class="buttom" type="submit" value="Crear">
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
            <?php foreach ($datos->idiomas as $idiomas):?>

            <div class="container">
                <form name="idiomas" class="form" method="post" action="/idiomas/update/idi/<?= $idiomas['codigo'] ?>/cv/<?= $idiomas['id_curriculum'] ?>">
                    <h2 class="title"><?=$idiomas['idioma'] ?></h2>
                    <p>
                        <label for="idioma">Nombre del idioma</label>
                        <input maxlength="30" type="text" id="idioma" name="idioma" required value="<?=$idiomas['idioma'] ?>" />
                    </p>


                    <p>
                        <label for="com_oral">Comprensión oral</label>
                        <select id="com_oral" name="com_oral">
                            <option value="" selected="selected">- Selecciona -</option>
                            <option value="A1" <?=($idiomas['com_oral']=='A1')? 'selected="selected"': '';?>>Básico (A1)</option>
                            <option value="A2" <?=($idiomas['com_oral']=='A2')? 'selected="selected"': '';?>>Básico (A2)</option>
                            <option value="B1" <?=($idiomas['com_oral']=='B1')? 'selected="selected"': '';?>>Intermedio (B1)</option>
                            <option value="B2" <?=($idiomas['com_oral']=='B2')? 'selected="selected"': '';?>>Intermedio alto (B2)</option>
                            <option value="C1" <?=($idiomas['com_oral']=='C1')? 'selected="selected"': '';?>>Dominio operativo eficaz (C1)</option>
                            <option value="C2" <?=($idiomas['com_oral']=='C2')? 'selected="selected"': '';?>>Maestría (C2)</option>
                            <option value="Nativo" <?=($idiomas['com_oral']=='nativo')? 'selected="selected"': '';?>>Nativo</option>
                        </select>
                    </p>

                    <p>
                        <label for="com_escrita">Comprensión escrita</label>
                        <select id="com_escrita" name="com_escrita">
                            <option value="" selected="selected">- Selecciona -</option>
                            <option value="A1" <?=($idiomas['com_escrita']=='A1')? 'selected="selected"': '';?>>Básico (A1)</option>
                            <option value="A2" <?=($idiomas['com_escrita']=='A2')? 'selected="selected"': '';?>>Básico (A2)</option>
                            <option value="B1" <?=($idiomas['com_escrita']=='B1')? 'selected="selected"': '';?>>Intermedio (B1)</option>
                            <option value="B2" <?=($idiomas['com_escrita']=='B2')? 'selected="selected"': '';?>>Intermedio alto (B2)</option>
                            <option value="C1" <?=($idiomas['com_escrita']=='C1')? 'selected="selected"': '';?>>Dominio operativo eficaz (C1)</option>
                            <option value="C2" <?=($idiomas['com_escrita']=='C2')? 'selected="selected"': '';?>>Maestría (C2)</option>
                            <option value="Nativo" <?=($idiomas['com_escrita']=='nativo')? 'selected="selected"': '';?>>Nativo</option>
                        </select>
                    </p>

                    <p>
                        <label for="exp_oral">Expresión oral</label>
                        <select id="exp_oral" name="exp_oral">
                            <option value="" selected="selected">- Selecciona -</option>
                            <option value="A1" <?=($idiomas['exp_oral']=='A1')? 'selected="selected"': '';?>>Básico (A1)</option>
                            <option value="A2" <?=($idiomas['exp_oral']=='A2')? 'selected="selected"': '';?>>Básico (A2)</option>
                            <option value="B1" <?=($idiomas['exp_oral']=='B1')? 'selected="selected"': '';?>>Intermedio (B1)</option>
                            <option value="B2" <?=($idiomas['exp_oral']=='B2')? 'selected="selected"': '';?>>Intermedio alto (B2)</option>
                            <option value="C1" <?=($idiomas['exp_oral']=='C1')? 'selected="selected"': '';?>>Dominio operativo eficaz (C1)</option>
                            <option value="C2" <?=($idiomas['exp_oral']=='C2')? 'selected="selected"': '';?>>Maestría (C2)</option>
                            <option value="Nativo" <?=($idiomas['exp_oral']=='nativo')? 'selected="selected"': '';?>>Nativo</option>
                        </select>
                    </p>

                    <p>
                        <label for="exp_escrita">Expresión escrita</label>
                        <select id="exp_escrita" name="exp_escrita">
                            <option value="" selected="selected">- Selecciona -</option>
                            <option value="A1" <?=($idiomas['exp_escrita']=='A1')? 'selected="selected"': '';?>>Básico (A1)</option>
                            <option value="A2" <?=($idiomas['exp_escrita']=='A2')? 'selected="selected"': '';?>>Básico (A2)</option>
                            <option value="B1" <?=($idiomas['exp_escrita']=='B1')? 'selected="selected"': '';?>>Intermedio (B1)</option>
                            <option value="B2" <?=($idiomas['exp_escrita']=='B2')? 'selected="selected"': '';?>>Intermedio alto (B2)</option>
                            <option value="C1" <?=($idiomas['exp_escrita']=='C1')? 'selected="selected"': '';?>>Dominio operativo eficaz (C1)</option>
                            <option value="C2" <?=($idiomas['exp_escrita']=='C2')? 'selected="selected"': '';?>>Maestría (C2)</option>
                            <option value="Nativo" <?=($idiomas['exp_escrita']=='nativo')? 'selected="selected"': '';?>>Nativo</option>
                        </select>
                    </p>

                    <p>
                        <input class="buttom" type="submit" value="Enviar">
                        <a class="eliminarform" href="/idiomas/delete/idi/<?= $idiomas['codigo'] ?>/cv/<?= $idiomas['id_curriculum'] ?>">Eliminar</a>
                    </p>
                </form>
            </div>
            <hr>

            <?php endforeach; ?>
        </section>
        
        <section class="module content" id="nuevoidioma">
            <div class="container">
                <form name="nuevoidiomaform" class="form nuevoform" method="post" action="/idiomas/insert/cv/<?=FrontController::getInstance()->request[3]["id"]?>">
                    <h3 class="sub-title">Añadir Idioma</h3>
                    <p>
                        <label for="nombrecv">Idioma</label>
                        <input maxlength="50" type="text" id="idioma" name="idioma" placeholder='Por Ejemplo: Inglés' required value="" />
                    </p>

                    <p>
                        <input class="buttom" type="submit" value="Crear">
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
            
            <?php foreach ($datos->capacidades as $capacidades):?>
            <div class="container">
                <form name="capacidadess" class="form" method="post" action="/capacidades/update/cap/<?= $capacidades['codigo'] ?>/cv/<?= $capacidades['id_curriculum'] ?>">
                    <h2 class="title"><?= $capacidades['nombre'] ?></h2>

                    <p>
                        <label for="capacidad">Nombre de la capacidad</label>
                        <input maxlength="60" type="text" id="capacidad" name="capacidad" required placeholder='Ejemplo:"Mecanografía"' value="<?= $capacidades['nombre'] ?>" />
                    </p>


                    <p>
                        <label for="descripcion">Descripción</label>
                        <textarea id="descripcion" name="descripcion" placeholder='Breve explicación de la capacidad, por ejemplo para Mecanografía: "400 pulsaciones" o para Ofimática "Paquete Office: Word, Excel, Access y PowerPoint, nivel avanzado"'>
                            <?=$capacidades['descripcion'] ?>
                        </textarea>
                    </p>

                    <p>
                        <input class="buttom" type="submit" value="Enviar">
                        <a class="eliminarform" href="/capacidades/delete/cap/<?= $capacidades['codigo'] ?>/cv/<?= $capacidades['id_curriculum'] ?>">Eliminar</a>
                    </p>
                </form>
            </div>
            <hr>
            
            <?php endforeach; ?>
        </section>

        <section class="module content" id="nuevacapacidad">
            <div class="container">
                <form name="nuevacapform" class="form nuevoform" method="post" action="/capacidades/insert/cv/<?=FrontController::getInstance()->request[3]["id"]?>">
                    <h3 class="sub-title">Añadir Capacidad</h3>
                    <p>
                        <label for="nombrecv">Capacidad</label>
                        <input maxlength="50" type="text" id="capacidad" name="capacidad" placeholder='Por Ejemplo: Mecanografía' required value="" />
                    </p>

                    <p>
                        <input class="buttom" type="submit" value="Crear">
                    </p>
                </form>
            </div>
        </section>

        <section class="module content" id="capacidades">
        <?php foreach ($datos->usuario as $usuario):?>
            
            <div class="container">
                <h2 class="title">Otros datos de interés</h2>
                <form name="otrosdatosform" class="form nuevoform" method="post">
                    <p>
                        <label for="otros">Otros datos</label>
                        <textarea id="otrosdatos" name="otrosdatos" placeholder='Añade de una sola vez  otra información que creas relevante, por ejemplo "Licencia de conducción B y C. Disponibilidad horaria y geográfica. Carné de manipulador de alimentos" '><?=$usuario['otros'] ?></textarea>
                    </p>

                    <p>
                        <input class="buttom" type="submit" value="Enviar">
                    </p>
                </form>
            </div>
        <?php endforeach; ?>
        </section>

    </div>
    <!-- /principal -->
</body>

</html>