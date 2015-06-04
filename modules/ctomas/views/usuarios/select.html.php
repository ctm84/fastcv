select de usuarios<br/>
------------------<br/>
<?php foreach($datos as $rows): ?>
    <?= $rows['id'] ?>, 
    <?= $rows['correo'] ?>, 
    <?= $rows['contrasena'] ?>, 
    <?= $rows['f_registro'] ?> 
    <a href="/usuarios/delete/id/<?= $rows['id'] ?>">borrar</a> | 
    <a href="/usuarios/update/id/<?= $rows['id'] ?>">editar</a> <br/>
<?php endforeach; ?>