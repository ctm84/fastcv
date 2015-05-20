 <?php
 //namespace CTomas\Core\Router;   #Router.php
$parameters = array();
$parametersRequest = array();
$controllers = array ('usuarios'=>array('index','insert', 'select', 'update', 'delete'), 'error'=>array('error404'), 'index'=>array('index') );
  
/* ********* URI **************************************** */
	//1) Guardamos la URI en una variable.
	$uri=$_SERVER['REQUEST_URI']; //guarda la URI. Ejemplo: http://miweb.com/index.html -> /index.html
	
	//2) Eliminar barras de más. Ejemplo: http://miweb.com/index.html// -> /index.html
	$uri= rtrim($uri, "/");

	//3) "Troceamos" la uri tomando como referencia las / y la guardamos en un array. //Ejemplo: http://miweb.com/usuarios/verperfil/1067 [0]= vacio [1]= usuarios [2]= verperfil [3]=1067  
	$request = explode("/", $uri);
	
	//Los pasos anteriores en una sola instruccion: 
	/*$request = explode( '/', rtrim($_SERVER['REQUEST_URI'], "/") */

	
/* ********* PARÁMETROS **************************************** */                                                   
	//1) Comprobar si nuestro array troceado ($request) tiene mas elementos que 3 (porque si tiene más, es que empiezan los pares key/value)
	//2) LLevar a otro array todos los elementos que empiezan a ser key1, value1, key2, etc. Ejemplo: miweb.com/usuarios/select/id/123 -> [0]=id [1]=123
	

	if(count($request)>3){
		for($i=3; $i<(count($request)); $i++){
			$parameters[] = $request[$i];
		}
		
		//3) Contar cuantos elementos tiene el array de parametros. Si es número impar -> controller=error | action=error404 Y SALIMOS
		if((count($parameters))%2 !=0){
			echo'Argumentos impares <br>';
			$request[1] = 'error'; $request[2] = 'error404';
			echo '<pre>'; print_r($request); echo '</pre>'; exit;  
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
		echo'Controller vacio <br>';
		$request[1] = 'index'; $request[2] = 'index';
		echo '<pre>'; print_r($request); echo '</pre>'; exit;
		die;
	}

	//2) Si hay valor, preguntamos si ese valor existe como controlador. Si no -> Controller=Error | Action=error404
	if(array_key_exists($request[1], $controllers)){
		echo "El controlador existe.<br>";
		
		//3) Si controller existe, preguntamos si nos ha escrito un action. Si no -> controller=elquehayaescrito | action=index 
		if (isset($request[2]) && $request[2] !=""){
			echo ("Hay un action escrito.<br>");
			
			//4) Si ha escrito action, preguntamos si ese action existe dentro del controller. Si no -> controller=error | action=error404 Por ejemplo: miweb.com/usuarios/blablablaba
				//5)Si Action existe dentro del controller -> controller=elquehayaescrito | action=laquehayaescrito
			if(in_array($request[2], $controllers[$request[1]])){
				echo "Action existe.<br>";
				echo '<pre>'; print_r($request); echo '</pre>'; exit;
			} else {
				echo'Action inexistente<br>';
				$request[1] = 'error'; $request[2] = 'error404';
				echo '<pre>'; print_r($request); echo '</pre>'; exit; 
			}
		} else {
			echo'No hay action <br>';
			$request[2] = 'index';//action
			echo '<pre>'; print_r($request); echo '</pre>'; exit; 
		}
	} else {
			echo'Controlador inexistente<br>';
			$request[1] = 'error'; $request[2] = 'error404';//controller y action
			echo '<pre>'; print_r($request); echo '</pre>'; exit; 
	}


/*	
// require
require_once(../modules/.../router.php); //función

// con funciones
$request = router();

// con clases
$router = new Router();
$request = $router->getRequest();

// con clases molón (estática)
$request = Router::getRequest();

use CTomas\Core\Router;
$request = Router::getRequest();

*/