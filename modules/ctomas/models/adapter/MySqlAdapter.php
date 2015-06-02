  <?php

class MySqlAdapter
{
    private $link = null;
    
    function __construct()
    {
        $this->connect();
    }
    
    function connect()
    {
        $this->link = mysqli_connect(
            FrontController::getInstance()->config['host'],
            FrontController::getInstance()->config['user'],
            FrontController::getInstance()->config['pass'],
            FrontController::getInstance()->config['db']
        ) or die("Error " . mysqli_error($this->link));
    }
    
    function execSQL($queryString) //si da problemas con el delete, update o insert crear nuevo metodo. Ejemplo debajo. 
    {
        $result = $this->link->query($queryString) or die("Error in the consult.." . mysqli_error($this->link));
        $rows = [];
        while($row = $result->fetch_array(MYSQLI_BOTH)) //both devuelve un array que es asociativo y numerico. 
        {
            $rows[] = $row;
        }
        
        return $rows;
    }
    
     function deleteSQL($queryString) 
    {
        $result = $this->link->query($queryString) or die("Error in the consult.." . mysqli_error($this->link));
    }
    
    function disconnect()
    {
        mysqli_close($this->link);
    }
    
    function __destruct()
    {
        $this->disconnect();
    }
    
    /*
    public function fetch($queryString)
    {
        $array = [];
        $result = $this->link->query($queryString) or die("Error in the consult.." . mysqli_error($this->link));
        while($row = $result->fetch_array(MYSQLI_BOTH))
            $array[]=$row;
        }
        return $array;
    }

    public function save($queryString)
    {
        return $this->link->query($queryString);
    }
    */    
}