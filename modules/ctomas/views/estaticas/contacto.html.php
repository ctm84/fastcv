<!DOCTYPE html>

<html lang="es">

<head>
    <link rel="stylesheet" href="/assets/css/contacto.css">
</head>

<body>
    <div class="principal">
        <section class="module parallax parallax-1">
            <div class="container punteado">
                <h1>Contacto</h1>
            </div>
        </section>

        <section class="module content">
            <div class="container">
                <p>Fast CV ha sido desarrollado por Carlos Tomás Martínez. Si te interesa contactar conmigo puedes utilizar el formulario o enviarme directamente un correo a <a href="mailto:ctmdesarollo@gmail.com"> ctmdesarollo@gmail.com</a>.</p>
                <p>Puedes encontrar otros trabajos en mi <a href=" http://ctmportfolio.esy.es/ ">portfolio</a> y en mis repositorios de <a href=" https://github.com/ctm84">Github</a>.</p>
            </div>
        </section>

        <section class="module content">
            <div class="container">
                <h2 class="title">Contacto</h2>
                <form name="contacto" class="form" method="post" accept-charset="utf-8">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" required />
                    <label for="correo">Correo</label>
                    <input type="email" name="correo" id="correo" required />
                    <label for="asunto">Asunto</label>
                    <input type="text" name="asunto" id="asunto" required />
                    <label for="mensaje">Mensaje</label>
                    <textarea name="mensaje" id="mensaje" minlength=20 required></textarea>
                    <input class="buttom" type="submit" id="submit-contacto" name="submit" value="Enviar" />
                </form>
            </div>
        </section>
    </div>
    <!-- /principal -->
</body>

</html>