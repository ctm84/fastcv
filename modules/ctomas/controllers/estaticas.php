<?php
require_once("../modules/ctomas/core/renderView.php");
require_once("../modules/ctomas/core/renderLayout.php");

function ejecutarController($request)
{
    $layout = 'site.html.php';  // Definimos un layout para todo el controlador
    
	$action = $request[2];
	$content = $action($request); // -> contacto($request); portada($request);... 
   
   return renderLayout($layout, $content);
}

//actions
//************************//
function index($request)
{
    $request[2] = 'portada';
    return portada($request); 
} 

function contacto($request)
{
    return renderView($request[2]); // -> return renderView(contacto);
}

function portada($request)
{
	return renderView($request[2]);
} 