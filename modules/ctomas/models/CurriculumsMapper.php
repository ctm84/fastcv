<?php
require_once('../modules/ctomas/models/adapter/' . FrontController::getInstance()->config['adapter'] . '.php');

class CurriculumsMapper
{
    function getCurriculums()
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();  
        
        return $adapter->execSQL('SELECT * FROM CURRICULUM');
    }
    
    function getCurriculum($id)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();  
        
        return $adapter->execSQL('SELECT * FROM CURRICULUM WHERE ID =' .$id);
    }
    
    function getCurriculumsByUser()
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();
    
        return $adapter->execSQL('SELECT * FROM CURRICULUM WHERE ID_USUARIO =' .$_SESSION["id_usuario"]);
    }
    
    function borrarCurriculum ($id)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();  
        
        return $adapter->emptyexecSQL('DELETE FROM CURRICULUM WHERE ID =' .$id); 
    }
    
    function insertCurriculum()
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();
        
		$id = rand(3, 99);
		$nombre = $_POST['nombrecv']; 

        return $adapter->emptyexecSQL('INSERT INTO CURRICULUM(ID, ALIAS, ID_USUARIO ) VALUES("'.$id.'","'.$nombre.'","'.$_SESSION["id_usuario"].'")');
    }
    
    function updateCurriculum()
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();
        
        $id = $_POST['id'];
		$pass = $_POST['password']; 
		$correo = $_POST['email'];
        
        return $adapter->emptyexecSQL('UPDATE USUARIOS SET CORREO="'.$correo.'", CONTRASENA="'.$pass.'"WHERE ID ="'.$id.'"');
    }
    
    function getCurriculumFull($id)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();  
        
        $datospersonales = $adapter->execSQL('SELECT * FROM CURRICULUM WHERE ID =' .$id);
        $datosexperiencia= $adapter->execSQL('SELECT * FROM EXPERIENCIA WHERE ID_CURRICULUM =' .$id);
        $datosformacion= $adapter->execSQL('SELECT * FROM FORMACION WHERE ID_CURRICULUM =' .$id);
        $datosidiomas= $adapter->execSQL('SELECT * FROM IDIOMAS WHERE ID_CURRICULUM =' .$id);
        $datoscapacidades= $adapter->execSQL('SELECT * FROM CAPACIDADES WHERE ID_CURRICULUM =' .$id);
        
        $resultado = array_merge($datospersonales, $datosexperiencia, $datosformacion, $datosidiomas, $datoscapacidades);
        return $resultado;
    }
}