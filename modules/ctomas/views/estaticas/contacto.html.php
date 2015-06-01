<!DOCTYPE html>

<html lang="es">

<head>
    <link rel="stylesheet" href="/assets/css/contacto.css">
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

        <div id="nav-aux">
            <div id="nav-trigger">
                <span>Menu</span>
            </div>
            <nav id="nav-main">
                <ul>
                    <li><a href="">Home</a>
                    </li>
                    <li><a href="">Términos legales</a>
                    </li>
                    <li><a href="">Ayuda</a>
                    </li>
                    <li><a href="">Contacto</a>
                    </li>
                </ul>
            </nav>
            <nav id="nav-mobile"></nav>
        </div>

        <main>
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
                    <form name="contacto" class="form">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" />
                        <label for="correo">Correo</label>
                        <input type="text" name="correo" />
                        <label for="asunto">Asunto</label>
                        <input type="text" name="asunto" />
                        <label for="mensaje">Mensaje</label>
                        <textarea name="mensaje"> </textarea>
                        <input class="buttom" type="submit" id="submit-contacto" name="submit" value="Enviar" />
                    </form>
                </div>
            </section>

        </main>
    </div>
    <!-- /#wrapper -->

    <!-- js -->
    <script src="http://code.jquery.com/jquery-1.9.0.min.js" type="text/javascript"></script>
    <script src="/assets/js/modernizer.js"></script>
    <script src="/assets/js/navbarauxiliar.js"></script>

</body>

</html>