<?php
class Dispatch
{
    private $request = [];
    
    function __construct($request) //esto se llama inyección de dependencias. 
    { 
        $this->request = $request;
    }
    
	public function dispatch()
	{
		require_once('../modules/ctomas/controllers/' . $this->request[1] . '.php');
        
        $controller = new $this->request[1]($this->request);  // $controller = new errores($request);
        $action = $this->request[2];
        return $controller->$action();  // $controller->error404();
	}
}