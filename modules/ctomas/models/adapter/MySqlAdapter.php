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
    
    function execSQL($queryString)
    {
        $result = $this->link->query($queryString) or die("Error in the consult.." . mysqli_error($this->link));
        $this->disconnect();
        $rows = [];
        while($row = $result->fetch_array(MYSQLI_BOTH))
        {
            $rows[] = $row;
        }
        
        return $rows;
    }
    
    function disconnect()
    {
        mysqli_close($this->link);
    }
}