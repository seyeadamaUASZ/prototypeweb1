<?php 

class Region {
    private $conn;
    private $table='tp_region';
    private $reg_id;
    private $reg_nom;
    private $reg_pays;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        // Create query
        $query = 'SELECT
          reg_id,
          reg_nom,
          reg_pays
        FROM
          ' . $this->table . '
        ORDER BY
          created_at DESC';
  
        // Prepare statement
        $stmt = $this->conn->prepare($query);
  
        // Execute query
        $stmt->execute();
  
        return $stmt;
      }


}