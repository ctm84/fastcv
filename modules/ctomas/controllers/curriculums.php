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
        $action = FrontController::getInstance()->request[2] = 'selectbyus';
        return $this->$action();
    }

    function select()
    {
         $curriculums = new CurriculumsMapper();
        
         if(!isset(FrontController::getInstance()->request[3]["id"]) || FrontController::getInstance()->request[3]["id"]==""){ 
            $datos = $curriculums->getCurriculums();

            return FrontController::getInstance()->renderLayoutNavbars(
                $this->layoutnav,
                FrontController::getInstance()->renderNavbars( $this->navbars),
                FrontController::getInstance()->renderView($datos)
            );
         }else{
                $datos = $curriculum->getCurriculum(FrontController::getInstance()->request[3]["id"]);

                return FrontController::getInstance()-> renderLayout(
                    $this->layout, 
                    FrontController::getInstance()->renderView($datos)
            );
         }
    }
    
    function selectbyus()
    {
        $curriculums = new CurriculumsMapper();
        $datos = $curriculums->getCurriculumsByUser();

        return FrontController::getInstance()->renderLayoutNavbars(
            $this->layoutnav,
            FrontController::getInstance()->renderNavbars( $this->navbars),
            FrontController::getInstance()->renderView($datos)
        );
    }

    function delete()
    {
        $curriculum = new CurriculumsMapper();
        $curriculum->borrarCurriculum(FrontController::getInstance()->request[3]["id"]); // curriculum->borrarcurriculum(id del user)
        
        header('Location: /index');
    }
    
    function insert()
    {
        if($_POST){

            $curriculum = new CurriculumsMapper();
            $curriculum->insertCurriculum();

            header('Location: /index'); 
        }
    }

    function update()
    {
        $curriculum = new CurriculumsMapper();
        
        if($_POST){
             if(!isset($_POST['otrosdatos'])){
                 $curriculum->updateCurriculum(FrontController::getInstance()->request[3]["id"]);

                 header('Location: /curriculums/update/id/'.FrontController::getInstance()->request[3]["id"]);
             }else{
                $curriculum->updateOtros(FrontController::getInstance()->request[3]["id"]);
                 
                 header('Location: /curriculums/update/id/'.FrontController::getInstance()->request[3]["id"]);
             }
        }else{
             $datos = $curriculum->getCurriculumFull(FrontController::getInstance()->request[3]["id"]);
            
             return FrontController::getInstance()-> renderLayout(
                $this->layout, 
                FrontController::getInstance()->renderView($datos)
            );
        }
    }
    
    function mostrar()
    {
        $curriculums = new CurriculumsMapper();
        $datos = $curriculums->getCurriculumFull(FrontController::getInstance()->request[3]["id"]);

        return FrontController::getInstance()->renderLayoutNavbars(
            $this->layoutnav,
            FrontController::getInstance()->renderNavbars( $this->navbars),
            FrontController::getInstance()->renderView($datos)
        );
    }
    
}