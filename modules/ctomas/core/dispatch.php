<?php
function dispatch($request)
{
	/*
	switch ($request[1])
	{
		case 'usuarios':
			// TODO
			break;
		case 'error':
			require_once('../controllers/error.php');
			ejecutarAction($request);
			break;
	}
	*/
	
	require_once('../modules/ctomas/controllers/' . $request[1] . '.php');
	return ejecutarController($request);
	
}