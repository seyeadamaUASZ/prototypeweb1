<?php 
class User {

    private $conn;
    private $table='users';

    public $id;
    public $nom;
    public $prenom;
    public $profil;
    public $actif;
    public $login;
    public $password;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        // Create query
        $query = 'SELECT
          id,
          nom,
          prenom,
          profil,
          actif
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


          // Get Single Category
  public function read_single(){
    // Create query
    $query = 'SELECT
           id,
          nom,
          prenom,
          profil,
          actif
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
      $this->nom = $row['nom'];
      $this->prenom = $row['prenom'];
      $this->profil = $row['profil'];
      $this->actif = $row['actif'];
  }

  // Create Category
  public function create() {
    // Create Query
    $query = 'INSERT INTO ' .
      $this->table . '
    SET
      nom = :nom,
      prenom = :prenom,
      profil = :profil,
      actif  = :actif,
      login = :login,
      password = :password
      '
      
      ;

  // Prepare Statement
  $stmt = $this->conn->prepare($query);

  // Clean data
  $this->nom = htmlspecialchars(strip_tags($this->nom));
  $this->prenom= htmlspecialchars(strip_tags($this->prenom));
  $this->profil = htmlspecialchars(strip_tags($this->profil));
  $this->actif = htmlspecialchars(strip_tags($this->actif));
  $this->login = htmlspecialchars(strip_tags($this->login));
  $this->password = htmlspecialchars(strip_tags($this->password));

  // Bind data
  $stmt-> bindParam(':nom', $this->nom);
  $stmt-> bindParam(':prenom', $this->prenom);
  $stmt-> bindParam(':profil', $this->profil);
  $stmt-> bindParam(':actif', $this->actif);

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
    nom = :nom,
    prenom = :prenom,
    profil = :profil,
    actif =: actif
      WHERE
      id = :id';

  // Prepare Statement
  $stmt = $this->conn->prepare($query);

  // Clean data
  $this->nom = htmlspecialchars(strip_tags($this->nom));
  $this->prenom= htmlspecialchars(strip_tags($this->prenom));
  $this->profil = htmlspecialchars(strip_tags($this->profil));
  $this->actif = htmlspecialchars(strip_tags($this->actif));
  $this->id = htmlspecialchars(strip_tags($this->id));

  // Bind data
   // Bind data
    $stmt-> bindParam(':nom', $this->nom);
    $stmt-> bindParam(':prenom', $this->prenom);
    $stmt-> bindParam(':profil', $this->profil);
    $stmt-> bindParam(':actif', $this->actif);
    $stmt-> bindParam(':id', $this->id);
  

  // Execute query
  if($stmt->execute()) {
    return true;
  }

  // Print error if something goes wrong
  printf("Error: .\n", $stmt->error);

  return false;
  }



}