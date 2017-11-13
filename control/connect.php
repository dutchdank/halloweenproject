<?php
class connect
{
    protected $pdo;
    
    /*
    * Code constructor
    */
    function __construct()
    {
        $this->connectToDb();
    }
    
    function connectToDb()
    {
        try {
            $this->pdo = new PDO('mysql:host=127.0.0.1;dbname=halloween', 'root', ''); 
        } catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }
}
?>
