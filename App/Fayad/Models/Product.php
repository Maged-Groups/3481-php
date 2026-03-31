<?php
namespace App\Fayad\Models;

use App\Fayad\core\Database;
use PDO; 
use PDOException;

class Product {
    private $conn;
    private $table = "products";

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getAll() {
        $stmt = $this->conn->query("SELECT * FROM {$this->table}");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>