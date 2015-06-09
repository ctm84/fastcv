<!DOCTYPE html>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="/assets/css/<?php echo $datos->estilo; ?>.css">
    <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>
</head>

<body id="top">
    <div id="cv" class="instaFade">
        <?php foreach ($datos->usuario as $usuario) : ?>
        <div class="mainDetails">
            <!-- <div id="headshot" class="quickFade">
                <img src="headshot.png" alt="foto del usuario" />
            </div> -->

            <div id="name">
                <h1 class="quickFade delayTwo"><?= $usuario ['nombre'] ?> <?= $usuario ['apellidos'] ?></h1>
            </div>

            <div id="contactDetails" class="quickFade delayFour">
                <ul>
                    <li><a href="mailto:<?= $usuario ['correo'] ?>" target="_blank"><?= $usuario ['correo'] ?></a>
                    </li>
                    <li><?= $usuario ['telefono'] ?></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <?php endforeach; ?>

        <div id="mainArea" class="quickFade delayFive">
            
            <section>
                <article>
                    <div class="sectionTitle">
                        <h1>Formaci&oacute;n Acad&eacute;mica </h1>
                    </div>
                    
                    <?php foreach ($datos->formacion as $formacion) : ?>
                    <div class="sectionContent">
                        <p class="subDetails"><?= $formacion ['a_inicio'] ?>/ <?= $formacion ['a_fin'] ?></p>
                        <p><b><?= $formacion ['titulacion'] ?></b>
                            <br> <?= $formacion ['centro']?>, <?= $formacion ['provincia'] ?> </p>
                    </div>
                    <?php endforeach; ?>
                    
                </article>
                <div class="clear"></div>
            </section>
            

            <section>
                <div class="sectionTitle">
                    <h1>Experiencia Laboral</h1>
                </div>
                
                <?php foreach ($datos->experiencia as $experiencia) : ?>
                <div class="sectionContent">
                    <article>
                        <h2><?= $experiencia ['puesto']?></h2>
                        <h3><?= $experiencia ['empresa']?></h3>
                        <p class="subDetails"> <?= $experiencia ['f_inicio']?>/<?= $experiencia ['f_fin']?> </p>
                        <p><?= $experiencia ['funciones']?></p>
                    </article>
                </div>
                <?php endforeach; ?>
                
                <div class="clear"></div>
            </section>

            <section>
                <div class="sectionTitle">
                    <h1>Capacidades</h1>
                </div>

                <div class="sectionContent">
                    <ul class="keySkills">
                    <?php foreach ($datos->capacidades as $capacidades) : ?>    
                        <li><b><?= $capacidades ['nombre']?>:</b> <?= $capacidades ['descripcion']?></li>
                    <?php endforeach; ?>    
                    </ul>
                </div>
                <div class="clear"></div>
            </section>

            <section>
                <div class="sectionTitle">
                    <h1>Idiomas</h1>
                </div>

                <div class="sectionContent">
                    <ul class="keySkills">
                    <?php foreach ($datos->idiomas as $idiomas) : ?>    
                        <li><b><?= $idiomas ['idioma']?></b></li>
                        <ul class="niveles-idioma">
                            <li><b>Comprensión Oral: </b><?= $idiomas ['com_oral']?></li>
                            <li><b>Comprensión Escrita: </b><?= $idiomas ['com_escrita']?></li>
                            <li><b>Expresión Oral: </b><?= $idiomas ['exp_oral']?></li>
                            <li><b>Expresión Escrita: </b><?= $idiomas ['exp_escrita']?></li>
                        </ul>
                    <?php endforeach; ?>   
                    </ul>
                </div>
                <div class="clear"></div>
            </section>

            <section>
                <div class="sectionTitle">
                    <h1>Sobre mí</h1>
                </div>

                <div class="sectionContent">
                    <article>
                        <?php foreach ($datos->usuario as $usuario) : ?>
                        <p><?= $usuario ['perfil']?></p>
                        <?php endforeach; ?> 
                    </article>
                </div>
                <div class="clear"></div>
            </section>

        </div>
    </div>
</body>

</html>