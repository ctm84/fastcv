Esto es el select!!!<br/>
------------------<br/>
<?php foreach($datos as $rows): ?>
<?= $rows['id'] ?>, <?= $rows['correo'] ?>, <?= $rows['f_registro'] ?> <a href="http://miweb.local/usuarios/delete/id/<?= $rows['id'] ?>">borrar</a> <br/>
<?php endforeach; ?>