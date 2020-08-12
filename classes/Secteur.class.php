<?php 

class Secteur{
    private $conn;
    private $table='secteur';

    public $id;
    public $nomsecteur;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        // Create query
        $query = 'SELECT
          id,
          nomsecteur
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


      public function read_single(){
        // Create query
        $query = 'SELECT
               id,
              nomsecteur
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
          $this->nom = $row['nomsecteur'];
      }


      public function create() {
        // Create Query
        $query = 'INSERT INTO ' .
          $this->table . '
        SET
          nomsecteur = :nomsecteur
          '
          
          ;
    
      // Prepare Statement
      $stmt = $this->conn->prepare($query);
    
      // Clean data
      $this->nomsecteur = htmlspecialchars(strip_tags($this->nomsecteur));
      // Bind data
      $stmt-> bindParam(':nomsecteur', $this->nomsecteur);
    
      // Execute query
      if($stmt->execute()) {
        return true;
      }
    
      // Print error if something goes wrong
      printf("Error:.\n", $stmt->error);
    
      return false;
      }


       // Update Category
  public function update() {
    // Create Query
    $query = 'UPDATE ' .
      $this->table . '
    SET
    nomsecteur = :nomsecteur,
      WHERE
      id = :id';

  // Prepare Statement
  $stmt = $this->conn->prepare($query);

  // Clean data
  $this->nom = htmlspecialchars(strip_tags($this->nomsecteur));

  // Bind data
   // Bind data
    $stmt-> bindParam(':nomsecteur', $this->nomsecteur);

  // Execute query
  if($stmt->execute()) {
    return true;
  }

  // Print error if something goes wrong
  printf("Error: .\n", $stmt->error);

  return false;
  }

}