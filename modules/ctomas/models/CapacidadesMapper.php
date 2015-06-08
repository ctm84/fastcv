<?php
require_once('../modules/ctomas/models/adapter/' . FrontController::getInstance()->config['adapter'] . '.php');

class CapacidadesMapper
{
    function insertCapacidades($cv)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();

        $codigo = rand(3, 99);
        $nombre = $_POST['capacidad']; 

        return $adapter->emptyexecSQL('INSERT INTO CAPACIDADES(CODIGO, NOMBRE, ID_CURRICULUM ) VALUES("'.$codigo.'","'.$nombre.'","'.$cv.'")');
    }
    
    function borrarCapacidades($cap)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();  
        
        return $adapter->emptyexecSQL('DELETE FROM CAPACIDADES WHERE CODIGO ='.$cap); 
    }
    
    function updateCapacidades($cap)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();
        
        return $adapter->emptyexecSQL('UPDATE CAPACIDADES SET 
        NOMBRE="'.$_POST['capacidad'].'", 
        DESCRIPCION="'.$_POST['descripcion'].'"
        
        WHERE CODIGO ="'.$cap.'"');
    }

}