<?php
require_once('../modules/ctomas/core/FrontController.php');

class Estaticas
{
    private $layout = 'site.html.php';

    //actions
    //************************//
    function index()
    {
        $action = FrontController::getInstance()->request[2] = 'portada';
        return $this->$action();  
    } 

    function contacto()
    {
        return FrontController::getInstance()->renderLayout(
            $this->layout,
            FrontController::getInstance()->renderView(null)
        );
    }

    function portada()
    {
        return FrontController::getInstance()->renderLayout(
            $this->layout,
            FrontController::getInstance()->renderView(null)
        );
    } 
}