<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "my_crud";

    protected $conn;


    public function __construct() {
        try {
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);
            if ($this->conn->connect_error) {
                throw new Exception("Connection failed: " . $this->conn->connect_error);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


// $db_con = new Database();


// print_r($db_con);

?>
