<?php

class FrontController
{
    public $request = [];
    public $config = [];
    private static $instance = null;
    
    static function getInstance()
    {
        if(!self::$instance) {
            self::$instance = new FrontController();
            session_start(); //aprovechar la instancia del FC para iniciar sesion
        }          
        return self::$instance; 
    }
        
    function getConfig()
	{
		require_once('../modules/ctomas/configs/configDB.php');
		require_once('../modules/ctomas/configs/configGeneral.php'); 

		$this->config = array_merge(getConfigDB(), getConfigGeneral());
	}
    
    function getRequest()
	{
		$parameters = array();
		$parametersRequest = array();
				
		/* ********* URI **************************************** */
		//1) Guardamos la URI en una variable.
		$uri=$_SERVER['REQUEST_URI']; //guarda la URI. Ejemplo: http://miweb.com/index.html -> /index.html
		
		//2) Eliminar barras de más. Ejemplo: http://miweb.com/index.html// -> /index.html
		$uri= rtrim($uri, "/");

		//3) "Troceamos" la uri tomando como referencia las / y la guardamos en un array. //Ejemplo: http://miweb.com/usuarios/verperfil/1067 [0]= vacio [1]= usuarios [2]= verperfil [3]=1067  
		$request = explode("/", $uri);
        
			
		/* ********* PARÁMETROS **************************************** */                                                   
		//1) Comprobar si nuestro array troceado ($request) tiene mas elementos que 3 (porque si tiene más, es que empiezan los pares key/value)
		//2) LLevar a otro array todos los elementos que empiezan a ser key1, value1, key2, etc. Ejemplo: miweb.com/usuarios/select/id/123 -> [0]=id [1]=123
		if(count($request)>3){
            for($i=3; $i<(count($request)); $i++){
                $parameters[] = $request[$i];
            }
			
			//3) Contar cuantos elementos tiene el array de parametros. Si es número impar -> controller=error | action=error404 Y SALIMOS
			if((count($parameters))%2 !=0){
				$request[1] = 'errores'; $request[2] = 'error404';
				$this->request = $request;
			}

			//4) Si es par, tenemos valores pares en $parameters del tipo ['key1', 'value1', 'key2', 'value2'] y lo que hacemos es:
				//A- recorrer ese array y capturamos los pares de parámetros para asignar al elemento par = key y al elemento impar = value.
				//B- el resultado tiene que ser -> $parametersRequest = [{'key1' => 'value1', 'key2' => 'value2', ...}]
			//5) En la variable $request solo tendremos $request = ['', 'controller', 'action', $parametersRequest]
			elseif((count($parameters))%2 ==0){
			
				for($i=0; $i<count($parameters); $i = $i+2){
					$parametersRequest[ $parameters[$i]] = $parameters[$i+1];
				}
				array_splice($request, 3);
				$request[] = $parametersRequest;
			}
		}
		
		/* ********* CONTROLLER / ACTION ******************************* */
		//1) Preguntar si el valor 1 tiene valor que no sea blanco. Si no tiene valor -> controller=index | action=index y SALIMOS
		
		if (!isset($request[1]) || $request[1]=="") {
			$request[1] = 'index'; $request[2] = 'index';
		}

		//2) Si hay valor, preguntamos si ese valor existe como controlador. Si no -> Controller=errores | Action=error404
		if(array_key_exists($request[1], $this->config)){
			
			//3) Si controller existe, preguntamos si nos ha escrito un action. Si no -> controller=elquehayaescrito | action=index 
			if (isset($request[2]) && $request[2] !=""){
				
				//4) Si ha escrito action, preguntamos si ese action existe dentro del controller. Si no -> controller=error | action=error404 Por ejemplo: miweb.com/usuarios/blablablaba
					//5)Si Action existe dentro del controller -> controller=elquehayaescrito | action=laquehayaescrito
				if(!in_array($request[2], $this->config[$request[1]])) {
					$request[1] = 'errores'; $request[2] = 'error404';
				}
			} else {
				$request[2] = 'index';//action;
			}
		} else {
				$request[1] = 'errores'; $request[2] = 'error404';//controller y action
		}
        $this->request = $this->redireccion($request);
	}

	function redireccion($request)
	{
		// de /index/index ->  /estaticas/portada
		if ($request[1] == 'index' && $request[2] == 'index') {
			$request[1] = 'estaticas';
			$request[2] = 'index';
		} 
		
		//de /contacto/index -> /estaticas/contacto
		 if ($request[1] == 'contacto' && $request[2] == 'index') {
			$request[1] = 'estaticas';
			$request[2] = 'contacto';
		}
        //de /legal/index -> /estaticas/legal
		 if ($request[1] == 'legal' && $request[2] == 'index') {
			$request[1] = 'estaticas';
			$request[2] = 'legal';
		}
        //de /legal/index -> /estaticas/legal
		 if ($request[1] == 'ayuda' && $request[2] == 'index') {
			$request[1] = 'estaticas';
			$request[2] = 'ayuda';
		}
		return $request;
	}
    
	function dispatch()
	{
		require_once('../modules/ctomas/controllers/' . $this->request[1] . '.php');
        
        $controller = new $this->request[1]();  // $controller = new errores();
        $action = $this->request[2];
        return $controller->$action();  // $controller->error404();
	}
    
    function renderLayout($layout, $content)
    {
        ob_start();
        require_once("../modules/ctomas/views/layouts/".$layout);
        $response = ob_get_contents();
        ob_end_clean();
        return $response;
    }
    
    function renderView($datos)
    {
        ob_start();
        require_once("../modules/ctomas/views/" . $this->request[1] . "/" . $this->request[2] . ".html.php");
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
    
    function renderNavbars($navbars)
    {
        ob_start();
        require_once("../modules/ctomas/views/layouts/".$navbars);
        $response = ob_get_contents();
        ob_end_clean();
        return $response;
    }
    
    function renderLayoutNavbars ($layoutnav, $navbars, $content)
    {
        ob_start();
        require_once("../modules/ctomas/views/layouts/".$layoutnav);
        $response = ob_get_contents();
        ob_end_clean();
        return $response;
    }
    
}