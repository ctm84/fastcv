Esto es el select!!!<br/>
------------------<br/>
<?php foreach($datos as $rows): ?>
<?= $rows['id'] ?>, <?= $rows['correo'] ?>, <?= $rows['f_registro'] ?> <br/>
<?php endforeach; ?>