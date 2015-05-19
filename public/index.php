 <?php
require_once('../modules/ctomas/core/FrontController.php');

/* ************************************************ */
/*
1- Instanciar un objeto de la clase FrontController (trabajaremos con ese objeto)
2- Conseguir la config
3- Conseguir un Request
4- Hacer un dispatch para obtener un Response
5- Mostrar ese Response
*/  

$fc = FrontController::getInstance();
$fc->getConfig();
$fc->getRequest();
print_r($fc->dispatch()); //el response

