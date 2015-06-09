<?php
require_once('../modules/ctomas/models/adapter/' . FrontController::getInstance()->config['adapter'] . '.php');

class FormacionMapper
{
    function insertFormacion($cv)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();
       
        $nombre = $_POST['formacion']; 

        return $adapter->emptyexecSQL('INSERT INTO FORMACION(TITULACION, ID_CURRICULUM ) VALUES("'.$nombre.'","'.$cv.'")');
    }
    
    function borrarFormacion ($forma)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();  
        
        return $adapter->emptyexecSQL('DELETE FROM FORMACION WHERE CODIGO ="'.$forma.'"');
    }
    
    function updateFormacion($forma)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();
        
        return $adapter->emptyexecSQL('UPDATE FORMACION SET 
        TITULACION="'.$_POST['titulacion'].'", 
        NIVEL="'.$_POST['nivel'].'", 
        CENTRO="'.$_POST['centro'].'",
        POBLACION="'.$_POST['poblacion-for'].'",
        PROVINCIA="'.$_POST['provincia-for'].'",
        PAIS="'.$_POST['pais-for'].'",
        A_INICIO="'.$_POST['a_inicio'].'",
        A_FIN="'.$_POST['a_fin'].'"
        
        WHERE CODIGO ="'.$forma.'"');
    }

}