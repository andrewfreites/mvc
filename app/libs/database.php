<?php
class Database{
    private $host;
    private $db;
    private $password;
    private $user;
    private $charset;
    private $port;

    public function __construct()
    {
        $this->host = constant('HOST');
        $this->db = constant('DB');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
        $this->charset = constant ('CHARSET');
        $this->port = constant('PORT');
    }
    function connect(){
        try{
            $connection="mysql:host=". $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset .";port=". $this->port;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $pdo = new PDO($connection, $this->user,$this->password, $options);
            return $pdo;
        }
        catch(PDOException $e){
            print_r('Error connection: '. $e->getMessage());
        }
    }
}
?>