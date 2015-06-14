<?php
function getConfigGeneral ()
{   
		//array controllers   
		return  array (
			'usuarios'=>array('index','insert', 'select', 'update', 'delete', 'login', 'logout'), 
            
            'curriculums'=>array('index', 'select', 'insert', 'delete', 'update', 'selectbyus', 'mostrar', 'uploadphoto', 'updateestilo'), 
            
            'idiomas'=>array('index', 'select', 'insert', 'delete', 'update'), 
            
            'experiencia'=>array('select', 'insert', 'delete', 'update'),
            
            'formacion'=>array('select', 'insert', 'delete', 'update'),
            
            'capacidades'=>array('select', 'insert', 'delete', 'update'),
            
			'errores'=>array('index','error404'),
            
			'estaticas'=>array('index','contacto', 'portada', 'legal', 'ayuda'), 
            
            'index'=>array('index'), 
            'contacto'=>array('index'),
            'portada'=>array('index'), 
            'legal'=>array('index'), 
            'ayuda'=>array('index'),
		);  
}
