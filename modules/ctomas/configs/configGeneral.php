<?php
function getConfigGeneral ()
{   
		//array controllers   
		return  array (
			'usuarios'=>array('index','insert', 'select', 'update', 'delete'), 
            
            'curriculums'=>array('index','insert', 'select', 'update', 'delete'), 
            
            'idiomas'=>array('index', 'select'), //controller de prueba
            
			'errores'=>array('index','error404','error403'), //403 pendiente
            
			'estaticas'=>array('index','contacto', 'portada', 'legal', 'ayuda'), 
            
            'index'=>array('index'), 
            'contacto'=>array('index'), 
            'legal'=>array('index'), 
            'ayuda'=>array('index'),
		);  
}
