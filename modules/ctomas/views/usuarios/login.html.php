<!DOCTYPE html>

<html lang="es">

<head>
</head>

<body>
    <div class="principal">

        <section class="module content">
            <div class="container" id="logearse">
                <h2 class="title">Iniciar sesión</h2>
                <form name="login" class="form">
                    <p>
                        <label for="text-email1">Correo electrónico</label>
                        <input type="email" id="text-email1" name="email" class="text" maxlength="100" value="" required />
                    </p>
                    <p>
                        <label for="imppass2">Contraseña</label>
                        <input type="password" id="imppass2" name="password" value="" required />
                    </p>
                    <p>
                        <input class="buttom" type="submit" id="submit-login" name="submit" value="Iniciar sesión" />
                    </p>

                    <p>
                        <a href="#">¿Has olvidado tu contraseña?</a>
                    </p>
                </form>
            </div>
        </section>

        <section class="module content">
            <div class="container" id="registrarse">
                <h2 class="title">¿Todavía no eres miembro? Regístrate.</h2>
                <form name="signup" class="form">
                    <p>
                        <label for="impmail">Correo electrónico</label>
                        <input type="email" id="impmail" name="email" maxlength="100" value="" required />
                    </p>
                    <p>
                        <label for="imppass">Contraseña</label>
                        <input type="password" id="imppass" name="password" value="" required pattern="[A-Za-z0-9!?-]{6,20}" title="La contraseña debe tener como mínimo 6 caráctres y como máximo 20" placeholder="Entre 6 y 20 carácteres" />
                    </p>
                    <p>
                        <label for="imppassconfirm">Confirmar contraseña</label>
                        <input type="password" id="imppassconfirm" name="password_confirm" value="" required />
                    </p>
                    <p>
                        <input class="buttom" type="submit" id="submit-signup" name="submit" value="Registrarse" />
                    </p>
                </form>
            </div>
        </section>
        
    </div>
    <!-- /principal -->

</body>

</html>