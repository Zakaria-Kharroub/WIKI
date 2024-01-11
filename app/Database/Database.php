<?php
namespace App\Database;
use PDO;
use PDOException;

class Database {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    // private $database = "mywikis";
    private $database = "wikitest";

    private $conn;

    public function __construct() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->database}";
            $this->conn = new PDO($dsn, $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
    public function getConnection() {
        return $this->conn;
    }
}


?>