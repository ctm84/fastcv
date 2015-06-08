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
    
    function insert()
    {
        if($_POST){
            $idiomas = new IdiomasMapper();
            $idiomas->insertIdiomas(FrontController::getInstance()->request[3]["cv"]);

            header('Location: /curriculums/update/id/'.FrontController::getInstance()->request[3]["cv"]); 
        }
    }
    
    function delete()
    {
        $idiomas = new IdiomasMapper();
        $idiomas->borrarIdiomas(FrontController::getInstance()->request[3]["idi"]);
        
        header('Location: /curriculums/update/id/'.FrontController::getInstance()->request[3]["cv"]); 
    }
    
    function update()
    {
        if($_POST){
             $idiomas = new IdiomasMapper();
             $idiomas->updateIdiomas(FrontController::getInstance()->request[3]["idi"]);
            
            header('Location: /curriculums/update/id/'.FrontController::getInstance()->request[3]["cv"]);
        }
    }

    
}