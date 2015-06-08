<?php
require_once('../modules/ctomas/core/FrontController.php');
require_once('../modules/ctomas/models/FormacionMapper.php');

class Formacion
{
    
    function insert()
    {
        if($_POST){
            $formacion = new FormacionMapper();
            $formacion->insertFormacion(FrontController::getInstance()->request[3]["cv"]);

            header('Location: /curriculums/update/id/'.FrontController::getInstance()->request[3]["cv"]); 
        }
    }
    
    function delete()
    {
        $formacion = new FormacionMapper();
        $formacion->borrarFormacion(FrontController::getInstance()->request[3]["forma"]);
        
        header('Location: /curriculums/update/id/'.FrontController::getInstance()->request[3]["cv"]); 
    }
    
    function update()
    {
        if($_POST){
             $formacion = new FormacionMapper();
             $formacion->updateFormacion(FrontController::getInstance()->request[3]["forma"]);
            
            header('Location: /curriculums/update/id/'.FrontController::getInstance()->request[3]["cv"]);
        }
    }
        
}