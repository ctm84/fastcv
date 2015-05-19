 <?php
require_once('../modules/ctomas/core/router.php');
require_once('../modules/ctomas/core/dispatch.php');
require_once('../modules/ctomas/configs/config.php');

$config = Config::getConfig();

$request = Router::getRequest($config); //se puede llamar así por ser estatica. Es igual que instanciar un objeto y llamar al metodo. 

$d = new Dispatch($request);  // crear objeto y pasarle parametro
$response = $d->dispatch(); //llamar al metodo y guardar respuesta en una variable.   

print_r($response);