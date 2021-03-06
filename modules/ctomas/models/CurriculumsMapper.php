<?php
require_once('../modules/ctomas/models/adapter/' . FrontController::getInstance()->config['adapter'] . '.php');

class CurriculumsMapper
{
    function getCurriculums()
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();  
        
        return $adapter->execSQL('SELECT * FROM CURRICULUM');
    }
    
    function getCurriculum($id)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();  
        
        return $adapter->execSQL('SELECT * FROM CURRICULUM WHERE ID ="' .$id.'"');
    }
    
    function getCurriculumsByUser()
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();
    
        return $adapter->execSQL('SELECT * FROM CURRICULUM WHERE ID_USUARIO ="' .$_SESSION["id_usuario"].'" ORDER BY F_CREACION DESC');
    }
    
    function borrarCurriculum ($id)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();  
        
        return $adapter->emptyexecSQL('DELETE FROM CURRICULUM WHERE ID ="' .$id.'"'); 
    }
    
    function insertCurriculum()
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();
        
		$id = uniqid('cv_');
		$nombre = $_POST['nombrecv']; 

        return $adapter->emptyexecSQL('INSERT INTO CURRICULUM(ID, ALIAS, ID_USUARIO ) VALUES("'.$id.'","'.$nombre.'","'.$_SESSION["id_usuario"].'")');
    }
  
    function updateCurriculum($id)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();
        
        return $adapter->emptyexecSQL('UPDATE CURRICULUM SET 
            NOMBRE="'.$_POST['nombre'].'", 
            APELLIDOS="'.$_POST['apellidos'].'", 
            F_NACIMIENTO="'.$_POST['f_nacimiento'].'",
            GENERO="'.$_POST['gender'].'",
            ESTADO_CIVIL="'.$_POST['estado_civil'].'",
            DIRECCION="'.$_POST['direccion'].'",
            CP="'.$_POST['cp'].'",
            POBLACION="'.$_POST['poblacion'].'",
            PROVINCIA="'.$_POST['provincia'].'",
            PAIS="'.$_POST['pais'].'",
            TELEFONO="'.$_POST['telefono'].'",
            CORREO="'.$_POST['email'].'",
            PERFIL="'.$_POST['perfil'].'"

            WHERE ID ="'.$id.'"');
    }
    
    function updateOtros($id)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();
        
        return $adapter->emptyexecSQL('UPDATE CURRICULUM SET 
        OTROS="'.$_POST['otrosdatos'].'"
        WHERE ID ="'.$id.'"');
    }
    
    function updateEstilo($id)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();
        
        return $adapter->emptyexecSQL('UPDATE CURRICULUM SET 
        ESTILO="'.$_POST['estilo'].'"
        WHERE ID ="'.$id.'"');
    }
    
    function getCurriculumFull($id) //temporal, pendiente de hacer cada consulta desde su controller
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();  
        
        $datospersonales = $adapter->execSQL('SELECT * FROM CURRICULUM WHERE ID ="' .$id.'"');
        $datosexperiencia= $adapter->execSQL('SELECT * FROM EXPERIENCIA WHERE ID_CURRICULUM ="' .$id.'"');
        $datosformacion= $adapter->execSQL('SELECT * FROM FORMACION WHERE ID_CURRICULUM ="' .$id.'"');
        $datosidiomas= $adapter->execSQL('SELECT * FROM IDIOMAS WHERE ID_CURRICULUM ="' .$id.'"');
        $datoscapacidades= $adapter->execSQL('SELECT * FROM CAPACIDADES WHERE ID_CURRICULUM ="' .$id.'"');
        
        $datos= new stdClass(); 
        $datos -> usuario = $datospersonales;
        $datos -> experiencia = $datosexperiencia;
        $datos -> formacion = $datosformacion;
        $datos -> idiomas = $datosidiomas;
        $datos -> capacidades = $datoscapacidades;
        
        return $datos;
    }
    
    function uploadPhoto($id)
    {
        $configAdapter = FrontController::getInstance()->config['adapter'];
        $adapter = new $configAdapter();  
        
        $uploads_dir = 'uploads'; //dejo variables en lugar de ponerlo directo por si cambio la nomenclatura para identificar las fotos
        $name = $id.'-'.$_FILES['foto']['name'];
        
       move_uploaded_file($_FILES['foto']['tmp_name'],
                           "$uploads_dir/$name");
        
        return $adapter->emptyexecSQL('UPDATE CURRICULUM SET 
        REFFOTO="'.$name.'"
        WHERE ID ="'.$id.'"');
        
        
       
    }
}