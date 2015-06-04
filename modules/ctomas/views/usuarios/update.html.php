<?php foreach($datos as $rows): ?>

    <form method="POST"> 
        <ul>
            <li>
                <h2>Usuario <?= $rows['id'] ?></h2>
            </li>
            
            <li>
                <label>ID</label>
                <input type="text" name="id" id="id" value="<?= $rows['id'] ?>"/>
            </li>

            <li>
                <label>Email</label>
                <input type="email" name="email" id="email" value="<?= $rows['correo'] ?>"/>
            </li>

            <li>
                <label>Contraseña</label>
                <input type="text" name="password" id="password" value="<?= $rows['contrasena'] ?>"/> 
            </li>
            
            <li>
                <label>Enviar</label>
                <input type="submit" name="submit" />
            </li>
        </ul>
    </form>

<?php endforeach; ?>