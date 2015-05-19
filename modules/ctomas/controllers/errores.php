<?php
require_once('../modules/ctomas/core/FrontController.php');

class Errores
{
    private $layout = 'site.html.php';

	//actions
	//************************//
	// Acción index
    /*
    function index()
	{
        // FrontController::getInstance()->request[2] = 'error404';
        // $action = 'error404';
        
        // Lo de arriba es lo mismo que:
        $action = FrontController::getInstance()->request[2] = 'error404';
        return $this->$action();  // return error404();
	}
    */

    // Acción error404
    /*
    function error404()
	{
		//return renderView($this->request[2]);
        return renderLayout(
            $this->layout,
            renderView(FrontController::getInstance()->request[2])
        );
	}
    */
}