<?php
require_once('../modules/ctomas/models/adapter/' . FrontController::getInstance()->config['adapter'] . '.php'); // (.../adapter/MySqlAdapter.php)

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
    
    function insertUsuario()
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();
		
		$id = rand(3, 99);
		$pass = $_POST['password']; 
		$correo = $_POST['email'];
              
        return $adapter->emptyexecSQL('INSERT INTO USUARIOS(ID, CORREO, CONTRASENA) VALUES("'.$id.'","'.$correo.'","'.$pass.'")');
    }
    
    function updateUsuario()
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();
        
        $id = $_POST['id'];
		$pass = $_POST['password']; 
		$correo = $_POST['email'];
        
        return $adapter->emptyexecSQL('UPDATE USUARIOS SET CORREO="'.$correo.'", CONTRASENA="'.$pass.'"WHERE ID ="'.$id.'"');
        
    }
}