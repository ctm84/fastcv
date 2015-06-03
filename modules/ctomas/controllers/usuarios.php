<?php
require_once('../modules/ctomas/core/FrontController.php');
require_once('../modules/ctomas/models/UsuariosMapper.php');

class Usuarios
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
        
        if(!isset(FrontController::getInstance()->request[3]["id"]) || FrontController::getInstance()->request[3]["id"]==""){
            $usuarios = new UsuariosMapper();
            $datos = $usuarios->getUsuarios();

            return FrontController::getInstance()-> renderLayout(
                $this->layout, 
                FrontController::getInstance()->renderView($datos)
            );
        }else{
            $usuario = new UsuariosMapper();
            $datos = $usuario->getUsuario(FrontController::getInstance()->request[3]["id"]);
            
            return FrontController::getInstance()-> renderLayout(
                $this->layout, 
                FrontController::getInstance()->renderView($datos)
            );
        }
    }

    function delete()
    {
        $usuarios = new UsuariosMapper();
        $usuarios->borrarUsuario(FrontController::getInstance()->request[3]["id"]); // usuarios->borrarUsuario(id del user)
        
        $action = FrontController::getInstance()->request[2] = 'select'; //cambio el action por select
        FrontController::getInstance()->request[3] = ''; //borro los arguments
        return $this->$action(); //devuelvo un select() 
    }
    
    function insert()
    {
        if($_POST){
            header('Location: http://miweb.local/index');
            
            $usuario = new UsuariosMapper();
            return $usuario->insertUsuario();
        }else{
            return FrontController::getInstance()-> renderLayout(
                $this->layout, 
                FrontController::getInstance()->renderView(null)
            );
        }
    }

    function update()
    {

    }
}