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
        
        if(!isset(FrontController::getInstance()->request[3]["id"]) || FrontController::getInstance()->request[3]["id"]==""){ //si no hay argumentos en el request
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
        $usuario = new UsuariosMapper();
        $usuario->borrarUsuario(FrontController::getInstance()->request[3]["id"]); // usuario->borrarUsuario(id del user)
        
        $action = FrontController::getInstance()->request[2] = 'select'; //cambio el action por select
        FrontController::getInstance()->request[3] = ''; //borro los arguments
        
        return $this->$action(); //devuelvo un select() 
    }
    
    function insert()
    {
        if($_POST){

            $usuario = new UsuariosMapper();
            $usuario->insertUsuario();

            header('Location: /index'); //redirigir a la portada
        }else{
            return FrontController::getInstance()->renderLayoutNavbars(
                $this->layoutnav,
                FrontController::getInstance()->renderNavbars( $this->navbars),
                FrontController::getInstance()->renderView(null)
            );
        }
    }

    function update()
    {  
        $usuario = new UsuariosMapper();
     
        if($_POST){
             $usuario->updateUsuario();
            
             header('Location: /usuarios');
        }else{
             $datos = $usuario->getUsuario(FrontController::getInstance()->request[3]["id"]);
            
            return FrontController::getInstance()-> renderLayout(
                $this->layout, 
                FrontController::getInstance()->renderView($datos)
            );
        }
    }
    
    function login()
    {
        $usuario = new UsuariosMapper();
        $datos = $usuario->loginUsuario();

        if(count($datos) >0){
            header('Location: /index');
        }else{
            header('Location: /errores/error404');
        }
    }
    
    function logout()
    {
        $usuario = new UsuariosMapper();
        $usuario->logoutUsuario();
     
        header('Location: /index');
    }
}