<?php
require_once('../modules/ctomas/models/adapter/' . FrontController::getInstance()->config['adapter'] . '.php'); // (.../adapter/MySqlAdapter.php)

class UsuariosMapper
{
    function getUsuarios()
    {
        // creo un adaptador (que será el que ponga en la config)
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();  // $adapter = new MySqlAdapter();
        $resultado = $adapter->execSQL('SELECT * FROM USUARIOS');
        
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
        
        return $adapter->execSQL('SELECT * FROM usuarios WHERE ID =' .$id);
    }
    
    function insertUsuario()
    {

        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();
		
		$id = rand(3, 99);
		$pass = $_POST['password']; 
		$correo = $_POST['email'];

        //echo 'INSERT INTO USUARIOS(ID, CORREO, CONTRASENA) VALUES("'.$id.'","'.$correo.'","'.$pass.'")';
        //die;

        return $adapter->emptyexecSQL('INSERT INTO usuarios(ID, CORREO, CONTRASENA) VALUES("'.$id.'","'.$correo.'","'.$pass.'")');
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
    
    function logUsuario()
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();

        $resultado = $adapter->execSQL(
            'SELECT * FROM usuarios WHERE CORREO ="'.$_POST['email'].'" AND CONTRASENA ="'.$_POST['password'].'"'
        );
        
        if(count($resultado) >0){
            session_start();
            $_SESSION["correo_usuario"] = $_POST['email'];
            $_SESSION["id_usuario"] = $resultado[0]['id'];
        }

        return $resultado;
    }
    
}