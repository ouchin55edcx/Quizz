<?php

class DB_Connection {
    private $host = 'localhost';
    private $username = 'root'; // Change this to your database username
    private $password = ''; // Change this to your database password
    private $db_name = 'aws';
    private $con;

    public function __construct() {
        try {
            $this->con = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw new Exception("Failed to connect to the database: " . $e->getMessage());
        }
    }

    public function prepare($query) {
        return $this->con->prepare($query);
    }

    public function __destruct() {
        $this->con = null;
    }
}
?>
