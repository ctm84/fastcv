<?php
require_once('../modules/ctomas/core/FrontController.php');
require_once('../modules/ctomas/models/CurriculumsMapper.php');

class Curriculums
{
    private $layout = 'site.html.php';
    private $layoutnav = 'sitenav.html.php';
    private $navbars = 'navbars.html.php';
    
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
        
        return FrontController::getInstance()->renderLayoutNavbars(
            $this->layoutnav,
            FrontController::getInstance()->renderNavbars( $this->navbars),
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