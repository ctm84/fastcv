<?php

class Sesion{
	
    function init(){
		@session_start();
	}
	
	function set($varname, $value){
		
		$_SESSION[$varname] = $value;	
	}
	
	function destroy(){
		
		session_unset();
		session_destroy();
	}	
}

?>