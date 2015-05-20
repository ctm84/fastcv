<?php
require_once('../modules/ctomas/core/FrontController.php');
require_once('../modules/ctomas/models/IdiomasMapper.php');

class Idiomas
{
    private $layout = 'site.html.php';
    
    //actions
    //************************//
    function index()
    {
        $action = FrontController::getInstance()->request[2] = 'select';
        return $this->$action();
    }

    function select()
    {
        $idiomas = new IdiomasMapper();
        $datos = $idiomas->getIdiomas();
        
        return FrontController::getInstance()-> renderLayout(
            $this->layout, 
            FrontController::getInstance()->renderView($datos)
        );
    }

    function delete()
    {

    }

    function update()
    {

    } 
}