<?php
class Errores
{
	require_once("../modules/ctomas/core/renderView.php");
	require_once("../modules/ctomas/core/renderLayout.php");

	static function ejecutarController($request)
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
		$content = $action($request); // -> error404($request);
		return renderLayout($layout, $content);
		
	}

	//actions
	//************************//
	static function index($request)
	{
		$request[2] = "error404";
		return self::error404($request); //llama al metodo de abajo
	}


	static function error404($request)
	{
		return renderView($request[2]);
	}
}