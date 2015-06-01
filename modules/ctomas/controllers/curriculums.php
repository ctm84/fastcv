<?php
require_once('../modules/ctomas/core/FrontController.php');
require_once('../modules/ctomas/models/CurriculumsMapper.php');

class Curriculums
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
        $curriculums = new CurriculumsMapper();
        $datos = $curriculums->getCurriculums();
        
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