<?php
require_once('../modules/ctomas/core/FrontController.php');
require_once('../modules/ctomas/models/ContactoMapper.php');

class Estaticas
{
    private $layout = 'site.html.php';
    private $layoutnav = 'sitenav.html.php';
    private $navbars = 'navbars.html.php';

    //actions
    //************************//
   function index()
    { 
        if (!isset($_SESSION["correo_usuario"])){
            $action = FrontController::getInstance()->request[2] = 'portada';
            return $this->$action();
        }else{
                header('Location:/curriculums/selectbyus');
        }
    } 

    function contacto()
    {
        if($_POST){
            $mensaje = new ContactoMapper();
            return $mensaje->sendMensaje();
                
        }else{
            return FrontController::getInstance()->renderLayoutNavbars(
                $this->layoutnav,
                FrontController::getInstance()->renderNavbars( $this->navbars),
                FrontController::getInstance()->renderView(null)
            );
        }
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