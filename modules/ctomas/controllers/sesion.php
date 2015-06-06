<?php
require_once('../modules/ctomas/core/FrontController.php');
require_once('../modules/ctomas/models/UsuariosMapper.php');

class Sesion{
	
    function init(){
		@session_start();
	}
	
	function set($varname, $value){
		
		$_SESSION[$varname] = $value;	
	}
	
	function destroy(){
		
		session_unset();
		session_destroy();
	}
    
    function log()
    {
        $usuario = new UsuariosMapper();
        $datos = $usuario->logUsuario();
        
        if(count($datos) >0){
            $_SESSION["correo_usuario"] = $datos[0]['correo'];
            /*header('Location: /index');*/
        }else{
            header('Location: /errores/error404');
        }  
    }
}

