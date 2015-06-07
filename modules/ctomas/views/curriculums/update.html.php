<!DOCTYPE html>

<html lang="es">

<head>
    <link rel="stylesheet" href="/assets/css/nuevocv.css">
</head>

<body>
    <div class="principal">

        <nav class="info-bar">
            <a class="icon cmn-home" data-title="Volver al main" href="#"></a>
            <a class="icon cmn-datos" data-title="Datos" href="#datos"></a>
            <a class="icon cmn-experiencia " data-title="Experiencia" href="#experiencia"></a>
            <a class="icon cmn-formacion" data-title="Formación" href="#formacion"></a>
            <a class="icon cmn-idiomas" data-title="Idiomas" href="#idiomas"></a>
            <a class="icon cmn-capacidades" data-title="Capacidades" href="#capacidades"></a>
            <a class="icon cmn-previa" data-title="Vista previa" href="#"></a>
            <!-- abrir en ventana nueva -->
        </nav>

        <section class="module parallax parallax-1">
            <div class="container punteado">
                <h1>Datos</h1>
            </div>
        </section>

        <section class="module content" id="datos">
            <?php foreach ($datos->usuario as $usuario)?>

            <div class="container">
                <h2 class="title">Datos personales</h2>
                <form name="datos-personales" class="form">
                    <p>
                        <label for="nombre">Nombre</label>
                        <input maxlength="50" type="text" id="nombre" name="nombre" value="<?= $usuario['nombre'] ?> " />
                    </p>

                    <p>
                        <label for="apellidos">Apellidos</label>
                        <input maxlength="60" type="text" id="apellidos" name="apellidos" value="<?= $usuario['apellidos'] ?> " />
                    </p>

                    <p>
                        <label for="f_nacimiento">Fecha de nacimiento</label>
                        <input maxlength="10" type="date" id="f_nacimiento" name="nombre" value="<?= $usuario['f_nacimiento'] ?>" />
                    </p>

                    <p>
                        <label for="gender">Genero</label>
                        <select id="gender" name="gender">
                            <option value="" selected="selected">- Selecciona -</option>
                            <option value="hombre" <?=($usuario['genero']=='hombre')?'selected="selected"':'';?>>Hombre</option>
                            <option value="mujer" <?=($usuario['genero']=='mujer')?'selected="selected"':'';?>>Mujer</option> 
                        </select>
                    </p>     

                    <p>
                        <label for="estado_civil">Estado civil</label>
                        <select id="estado_civil" name="estado_civil">
                            <option value="" selected="selected">- Selecciona -</option>
                            <option value="soltero" <?=($usuario['estado_civil']=='Soltero')?'selected="selected"':'';?> />Soltero/a</option>
                            <option value="casado" <?=($usuario['estado_civil']=='Casado')?'selected="selected"':'';?> />Casado/a</option>
                            <option value="divorciado" <?=($usuario['estado_civil']=='Divorciado')?'selected="selected"':'';?>>Divorciado/a</option>
                            <option value="viudo" <?=($usuario['estado_civil']=='Viudo')?'selected="selected"':'';?>>Viudo/a</option>
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
                        <input maxlength="15" type="tel" id="telefono" name="telefono" value="<?= $usuario['telefono'] ?>" />
                    </p>

                    <p>
                        <label for="email">Correo</label>
                        <input maxlength="255" type="email" id="email" name="email" value="<?= $usuario['correo'] ?>" />
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
                        <textarea id="perfil" name="perfil" placeholder='Un breve resumen, por ejemplo: "Me defino como una persona trabajadora y responsable con inquietud por seguir formándome."'><?= $usuario['perfil'] ?></textarea>
                    </p>

                    <p>
                        <label for="foto">Foto</label>
                        <input type="file" id="foto" name="foto" />
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
            <?php foreach ($datos->experiencia as $experiencia)?>
            
            <div class="container">
                <h2 class="title">Introduce una experiencia</h2>
                <form name="experiencia" class="form">

                    <p>
                        <label for="empresa">Nombre de la empresa</label>
                        <input maxlength="60" type="text" id="empresa" name="empresa" value="<?= $experiencia['empresa'] ?>" />
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
                        <input maxlength="50" type="text" id="puesto" name="puesto" value="<?= $experiencia['puesto'] ?>" />
                    </p>

                    <p>
                        <label for="funciones">Funciones</label>
                        <textarea id="funciones" name="funciones" placeholder='Enumera las funciones que desempeñabas, por ejemplo: "Atención telefónica, archivo de documentación, control de stocks."'><?= $experiencia['funciones'] ?></textarea>
                    </p>

                    <p>
                        <label for="f_inicio">Fecha de início</label>
                        <input type="month" id="f_inicio" name="f_inicio" vale="<?= $experiencia['f_inicio'] ?>">
                    </p>

                    <p>
                        <label for="f_fin">Fecha de finalización</label>
                        <input type="month" id="f_fin" name="f_fin" vale="<?= $experiencia['f_fin'] ?>">
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
                        <select id="nivel" name="nivel">
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
    </div>
   
    <!-- /principal -->
</body>

</html>