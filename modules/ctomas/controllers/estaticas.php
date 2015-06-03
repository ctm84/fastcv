<?php
require_once('../modules/ctomas/core/FrontController.php');

class Estaticas
{
    private $layout = 'site.html.php';
    private $layoutnav = 'sitenav.html.php';
    private $navbars = 'navbars.html.php';

    //actions
    //************************//
    function index()
    {
        $action = FrontController::getInstance()->request[2] = 'portada';
        return $this->$action();  
    } 

    function contacto()
    {
        return FrontController::getInstance()->renderLayoutNavbars(
            $this->layoutnav,
            FrontController::getInstance()->renderNavbars( $this->navbars),
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
    
    function legal()
    {
        return FrontController::getInstance()->renderLayoutNavbars(
            $this->layoutnav,
            FrontController::getInstance()->renderNavbars( $this->navbars),
            FrontController::getInstance()->renderView(null)
        );
    }
    
    function ayuda()
    {
        return FrontController::getInstance()->renderLayoutNavbars(
            $this->layoutnav,
            FrontController::getInstance()->renderNavbars( $this->navbars),
            FrontController::getInstance()->renderView(null)
        );
    }
}