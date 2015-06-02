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
        $id = FrontController::getInstance()->request[3]["id"];
        
        if(!isset($id) || $id==""){
            $usuarios = new UsuariosMapper();
            $datos = $usuarios->getUsuarios();

            return FrontController::getInstance()-> renderLayout(
                $this->layout, 
                FrontController::getInstance()->renderView($datos)
            );
        }else{
            $usuario = new UsuariosMapper();
            $datos = $usuario->getUsuario($id);
            
            return FrontController::getInstance()-> renderLayout(
                $this->layout, 
                FrontController::getInstance()->renderView($datos)
            );
        }
    }

    function delete()
    {
        $usuarios = new UsuariosMapper();
        $id = FrontController::getInstance()->request[3]["id"]; //sacar el value de id=3 
        $usuarios->borrarUsuario($id); 
        
        $action = FrontController::getInstance()->request[2] = 'select';
        return $this->$action();
    }

    function update()
    {

    } 
}