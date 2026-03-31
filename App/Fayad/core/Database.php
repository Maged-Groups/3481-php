<?php

namespace App\Fayad\core;

use PDO;
use PDOException;

class Database {
    private $host = "localhost";
    private $db_name = "testdb";
    private $username = "postgres";
    private $password = "*********";
    private $conn;

    public function connect() {
        if ($this->conn) {
            return $this->conn;
        }

        try {
            $this->conn = new \PDO(
                "pgsql:host={$this->host};dbname={$this->db_name}",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(\PDOException $e) {
            die("Connection error: " . $e->getMessage());
        }

        return $this->conn;
    }
}
?>