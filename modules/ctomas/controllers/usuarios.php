<?php
require_once('../modules/ctomas/core/FrontController.php');
require_once('../modules/ctomas/models/UsuariosMapper.php');

class Usuarios
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
        
        $action = FrontController::getInstance()->request[2] = 'select';
        FrontController::getInstance()->request[3] = '';
        return $this->$action();
    }

    function update()
    {

    } 
}