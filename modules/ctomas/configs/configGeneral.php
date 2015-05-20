<?php
function getConfigGeneral ()
{   
		//array controllers   
		return  array (
			'usuarios'=>array('index','insert', 'select', 'update', 'delete'), 
			'errores'=>array('index','error404'), 
			'estaticas'=>array('index','contacto', 'portada'), 
			'index'=>array('index'), 
			'contacto'=>array('index'), 
            'idiomas'=>array('index', 'select'),
		);  
}
