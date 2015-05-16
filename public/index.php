 <?php
require_once('../modules/ctomas/core/router.php');
require_once('../modules/ctomas/core/dispatch.php');
require_once('../modules/ctomas/configs/config.php');

$config = getConfig();  		 // función del config.php
$request = getRequest($config);         // función del router.php
$response = dispatch($request);  // función del dispatch.php
print_r($response);