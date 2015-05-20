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
}