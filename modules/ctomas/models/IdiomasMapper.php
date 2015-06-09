<?php
require_once('../modules/ctomas/models/adapter/' . FrontController::getInstance()->config['adapter'] . '.php');

class IdiomasMapper
{
    function getIdiomas()
    {
        // creo un adaptador (que será el que ponga en la config)
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();  // $adapter = new MySqlAdapter();
        
        // pido que el adaptador ejecute la consulta
        return $adapter->execSQL('SELECT * FROM IDIOMAS');
    }

    function insertIdiomas($cv)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();

        $nombre = $_POST['idioma']; 

        return $adapter->emptyexecSQL('INSERT INTO IDIOMAS(IDIOMA, ID_CURRICULUM ) VALUES("'.$nombre.'","'.$cv.'")');
    }
    
    function borrarIdiomas($idi)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();  
        
        return $adapter->emptyexecSQL('DELETE FROM IDIOMAS  WHERE CODIGO ="'.$idi.'"'); 
    }
    
    function updateIdiomas($idi)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();
        
        return $adapter->emptyexecSQL('UPDATE IDIOMAS SET 
        IDIOMA="'.$_POST['idioma'].'", 
        COM_ORAL="'.$_POST['com_oral'].'", 
        COM_ESCRITA="'.$_POST['com_escrita'].'",
        EXP_ORAL="'.$_POST['exp_oral'].'",
        EXP_ESCRITA="'.$_POST['exp_escrita'].'"
        
        WHERE CODIGO ="'.$idi.'"');
    }
}