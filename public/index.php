 <?php
require_once('../modules/ctomas/core/router.php');
require_once('../modules/ctomas/core/dispatch.php');
require_once('../modules/ctomas/configs/config.php');

$config = getConfig();  		 
$request = new router();        
$response = new dispatch($request-> getRequest($config));  // función del dispatch.php
print_r($response);