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
        return $this->$action();  // return portada();
    } 

    function contacto()
    {
        return FrontController::getInstance()->renderLayout(
            $this->layout,
            FrontController::getInstance()->renderView(FrontController::getInstance()->request[2])
        );
    }

    function portada()
    {
        //return renderView($this->request[2]);
        /*
        * ANTES
        *
        return renderLayout(
            $this->layout,
            renderView(FrontController::getInstance()->request[2])
        );
        */
        
        // AHORA:
        /*
        return FrontController::getInstance()->renderLayout(
            $this->layout,
            FrontController::getInstance()->renderView(FrontController::getInstance()->request[2])
        );
        */
        
        return FrontController::getInstance()->renderLayout(
            $this->layout,
            FrontController::getInstance()->renderView(FrontController::getInstance()->request[2])
        );
                
        
        /*
        * LO MISMO
        *
        $fc = FrontController::getInstance();
        return $fc->renderLayout(
            $this->layout,
            $fc->renderView($fc->request[2])
        );
        */
    } 
}