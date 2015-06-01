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
        $usuarios = new UsuariosMapper();
        $datos = $usuarios->getUsuarios();
        
        return FrontController::getInstance()-> renderLayout(
            $this->layout, 
            FrontController::getInstance()->renderView($datos)
        );
    }

    function delete()
    {
        $usuarios = new UsuariosMapper();
        $id = FrontController::getInstance()->request[3]; //sacar el value de id=3 
        $usuarios->borrarUsuario($id); 
        
        $datos = $usuarios->getUsuarios();
        return FrontController::getInstance()-> renderLayout(
            $this->layout, 
            FrontController::getInstance()->renderView($datos)
        );
    }

    function update()
    {

    } 
}