 <?php
require_once('../modules/ctomas/core/router.php');
require_once('../modules/ctomas/core/dispatch.php');
require_once('../modules/ctomas/configs/config.php');

$config = getConfig();

$request = Router::getRequest($config);

$d = new dispatch($request);  // función del dispatch.php
$response = $d->dispatch();

print_r($response);