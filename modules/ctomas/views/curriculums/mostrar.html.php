<?php foreach ($datos->experiencia as $experiencia) : ?>
    <div>Empresa: <?= $experiencia['empresa'] ?> </div>
    <div>Población: <?= $experiencia['poblacion'] ?> </div>
    <div>Provincia: <?= $experiencia['provincia'] ?> </div>
    <div>ETC.</div>
<?php endforeach; ?>