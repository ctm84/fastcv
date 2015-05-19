<?php
class Usuarios
{
    private $request = [];
    
    function __construct($request)
    {
        $this->request = $request;
    }    

    //actions
    //************************//
    function index()
    {
        $this->$request[2] = 'select';
        return $this->select();
    }

    function select()
    {

    }

    function delete()
    {

    }

    function update()
    {

    } 
}