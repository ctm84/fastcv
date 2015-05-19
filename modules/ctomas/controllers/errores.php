<?php
require_once('../modules/ctomas/core/FrontController.php');

class Errores
{
    private $layout = 'site.html.php';

	//actions
	//************************//
    function index()
    {
        $action = FrontController::getInstance()->request[2] = 'error404'; //Equivale a: FrontController::getInstance()->request[2] = 'error404'; $action = 'error404';
        return $this->$action();  //return error404();  
    } 

    function error404()
	{
        return FrontController::getInstance()-> renderLayout(
            $this->layout, 
            FrontController::getInstance()->renderView(FrontController::getInstance()->request[2])
        );
        //renderLayout($this->layout, renderView(request[2]));
	}
}