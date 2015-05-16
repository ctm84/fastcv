<?php
require_once("../modules/ctomas/core/renderView.php");
require_once("../modules/ctomas/core/renderLayout.php");

function ejecutarController($request)
{
	$layout = 'site.html.php';
	/*
	switch ($request[2])
	{
		case 'error404':
			error404();
			break;
	}
	*/
	$action = $request[2];
	$content = $action($request); // -> error404();
	return renderLayout($layout, $content);
	
}

//actions
//************************//
function index($request)
{
    $request[2] = "error404";
    return error404($request);
}


function error404($request)
{
    return renderView($request[2]);
}