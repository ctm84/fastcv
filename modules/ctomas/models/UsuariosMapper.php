<?php
require_once('../modules/ctomas/models/adapter/' . FrontController::getInstance()->config['adapter'] . '.php');

class UsuariosMapper
{
    function getUsuarios()
    {
        // creo un adaptador (que será el que ponga en la config)
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();  // $adapter = new MySqlAdapter();
        
        // pido que el adaptador ejecute la consulta
        return $adapter->execSQL('SELECT * FROM USUARIOS');
    }
    
    function borrarUsuario($id)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();  
        
        //para query sin respuesta uso emptyexecSQL
        return $adapter->emptyexecSQL('DELETE FROM USUARIOS WHERE ID =' .$id); 
    }
    
    function getUsuario($id)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();  
        
        return $adapter->execSQL('SELECT * FROM USUARIOS WHERE ID =' .$id);
    }
    
    function insertUsuario($id, $pass, $correo)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();
              
        return $adapter->emptyexecSQL('INSERT INTO USUARIOS(ID, CORREO, CONTRASENA) VALUES("'.$id.'","'.$correo.'","'.$pass.'")');
    }
}