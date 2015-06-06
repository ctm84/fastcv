<?php

class Sesion
{
	
    function init(){
		@session_start();
	}
	
	function destroy(){
		session_start();
		session_destroy();
        header('Location: /index');
	}    
}

