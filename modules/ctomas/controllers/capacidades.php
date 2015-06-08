<?php
require_once('../modules/ctomas/core/FrontController.php');
require_once('../modules/ctomas/models/CapacidadesMapper.php');

class Capacidades
{
    
    function insert()
    {
        if($_POST){
            $capacidades = new CapacidadesMapper();
            $capacidades->insertCapacidades(FrontController::getInstance()->request[3]["cv"]);

            header('Location: /curriculums/update/id/'.FrontController::getInstance()->request[3]["cv"]); 
        }
    }
    
    function delete()
    {
        $capacidades = new CapacidadesMapper();
        $capacidades->borrarCapacidades(FrontController::getInstance()->request[3]["cap"]);
        
        header('Location: /curriculums/update/id/'.FrontController::getInstance()->request[3]["cv"]); 
    }
    
    function update()
    {
        if($_POST){
             $capacidades = new CapacidadesMapper();
             $capacidades->updateCapacidades(FrontController::getInstance()->request[3]["cap"]);
            
            header('Location: /curriculums/update/id/'.FrontController::getInstance()->request[3]["cv"]);
        }
    }
        
}