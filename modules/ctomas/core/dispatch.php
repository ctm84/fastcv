<?php
class dispatch
{
    private $request = [];
    
    function __construct($request) {
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
		return ejecutarController($this->request);
		
	}
    
}