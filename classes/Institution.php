<?php 

class Institution{
    private $conn;
    private $table='users';

    public $id;
    public $code;
    public $paysIns;
    public $adresse;
    public $zoneI;
    public $idsecteur;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        // Create query
        $query = 'SELECT
          id,
          code,
          nom,
          paysIns,
          adresse,
          zoneI,
          idsecteur
        FROM
          ' . $this->table . '
        ORDER BY
         nom DESC';
  
        // Prepare statement
        $stmt = $this->conn->prepare($query);
  
        // Execute query
        $stmt->execute();
  
        return $stmt;
      }


          // Get Single Category
  public function read_single(){
    // Create query
    $query = 'SELECT
          id,
          code,
          nom,
          paysIns,
          adresse,
          zoneI,
          idsecteur
        FROM
          ' . $this->table . '
      WHERE id = ?
      LIMIT 0,1';

      //Prepare statement
      $stmt = $this->conn->prepare($query);

      // Bind ID
      $stmt->bindParam(1, $this->id);

      // Execute query
      $stmt->execute();

      $row = $stmt->fetch(PDO::FETCH_ASSOC);

      // set properties
      $this->id = $row['id'];
      $this->code = $row['code'];
      $this->nom = $row['nom'];
      $this->paysIns = $row['paysIns'];
      $this->adresse = $row['adresse'];
      $this->zoneI = $row['zoneI'];
      $this->idsecteur = $row['idsecteur'];
  }

}