<?php
class Dispatch
{
    private $request = [];
    
    function __construct($request) { //esto se llama inyección de dependencias. 
        $this->request = $request;
    }
    
	public function dispatch()
	{
		/*
		switch ($request[1])
		{
			case 'usuarios':
				// TODO
				break;
			case 'error':
				require_once('../controllers/error.php');
				ejecutarAction($request);
				break;
		}
		*/
		require_once('../modules/ctomas/controllers/' . $this->request[1] . '.php');
		$controller =$this->request[1]; 
		
		return $controller::ejecutarController($this->request); 
	}
    
}