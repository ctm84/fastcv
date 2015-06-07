select de curriculums por usuario<br/>
------------------<br/>
<?php foreach($datos as $rows): ?>
<?= $rows['id'] ?>, <?= $rows['f_creacion'] ?>, <?= $rows['alias'] ?> <br/>
<?php endforeach; ?>