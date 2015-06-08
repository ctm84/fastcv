<?php
require_once('../modules/ctomas/core/FrontController.php');
require_once('../modules/ctomas/models/ExperienciaMapper.php');

class Experiencia
{
    
    function insert()
    {
        if($_POST){
            $experiencia = new ExperienciaMapper();
            $experiencia->insertExperiencia(FrontController::getInstance()->request[3]["cv"]);

            header('Location: /curriculums/update/id/'.FrontController::getInstance()->request[3]["cv"]); 
        }
    }
    
    function delete()
    {
        $experiencia = new ExperienciaMapper();
        $experiencia->borrarExperiencia(FrontController::getInstance()->request[3]["exp"]);
        
        header('Location: /curriculums/update/id/'.FrontController::getInstance()->request[3]["cv"]); 
    }
    
    function update()
    {
        if($_POST){
             $experiencia = new ExperienciaMapper();
             $experiencia->updateExperiencia(FrontController::getInstance()->request[3]["exp"]);
            
            header('Location: /curriculums/update/id/'.FrontController::getInstance()->request[3]["cv"]);
        }
    }
        
}