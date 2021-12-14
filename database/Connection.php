
<?php

class Connection {

   private $pdo, $stmt;

   public function __construct() {
         $this->pdo=new PDO("mysql:host=localhost;dbname=vkomix","vkomix","vkomix");

   }

   public function select($sql,$data)
   {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute($data);

      return $this->stmt->fetchAll();
   }

}

?>
