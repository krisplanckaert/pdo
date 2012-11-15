<?php

class Connection {
    const HOST = 'localhost';
    const PORT = '8889';
    const DBNAME = 'user';
    const USER = 'root';
    const PASS = 'root';
    
    public function connect() 
    {
        try {
            $conn = new PDO('mysql:host='.self::HOST.'; port='.self::PORT.'; dbname='.self::DBNAME,self::USER,self::PASS);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // life moet deze lijn in commentaar!!!
            return $conn;
        } catch(PDOException $e) {
            var_dump($e->getMessage());
            die;
        }
        
    }
}

?>
