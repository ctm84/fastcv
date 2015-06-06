<?php
function getConfigGeneral ()
{   
		//array controllers   
		return  array (
			'usuarios'=>array('index','insert', 'select', 'update', 'delete', 'log'), 
            
            'curriculums'=>array('index','insert', 'select', 'update', 'delete'), 
            
            'idiomas'=>array('index', 'select'), //controller de prueba
            
			'errores'=>array('index','error404'),
            
            'sesion'=>array('init', 'set', 'destroy', 'log'),
            
			'estaticas'=>array('index','contacto', 'portada', 'legal', 'ayuda'), 
            
            'index'=>array('index'), 
            'contacto'=>array('index'), 
            'legal'=>array('index'), 
            'ayuda'=>array('index'),
		);  
}
