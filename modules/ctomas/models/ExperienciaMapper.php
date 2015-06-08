<?php
require_once('../modules/ctomas/models/adapter/' . FrontController::getInstance()->config['adapter'] . '.php');

class ExperienciaMapper
{
    function insertExperiencia($cv)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();

        $codigo = rand(3, 99);
        $nombre = $_POST['empresa']; 

        return $adapter->emptyexecSQL('INSERT INTO EXPERIENCIA(CODIGO, EMPRESA, ID_CURRICULUM ) VALUES("'.$codigo.'","'.$nombre.'","'.$cv.'")');
    }
    
    function borrarExperiencia ($exp)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();  
        
        return $adapter->emptyexecSQL('DELETE FROM EXPERIENCIA WHERE CODIGO =' .$exp); 
    }
    
    function updateExperiencia($exp)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();
        
        return $adapter->emptyexecSQL('UPDATE EXPERIENCIA SET 
        EMPRESA="'.$_POST['empresa'].'", 
        POBLACION="'.$_POST['poblacion-emp'].'", 
        PROVINCIA="'.$_POST['provincia-emp'].'",
        PAIS="'.$_POST['pais-emp'].'",
        PUESTO="'.$_POST['puesto'].'",
        FUNCIONES="'.$_POST['funciones'].'",
        F_INICIO="'.$_POST['f_inicio'].'",
        F_FIN="'.$_POST['f_fin'].'"
        
        WHERE CODIGO ="'.$exp.'"');
    }

}