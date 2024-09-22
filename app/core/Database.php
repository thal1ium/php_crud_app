<?php 

class Database {
  private $host;
  private $port;
  private $name;
  private $pass;
  private $dbname;
  
  public function __construct($host, $port, $name, $pass, $dbname)
  {
    $this->host = $host;
    $this->port = $port;
    $this->name = $name;
    $this->pass = $pass;
    $this->dbname = $dbname;
  }

  public function connect()
  {
    try {
      
      $dsn = "mysql:host=$this->host;port=$this->port;dbname=$this->dbname;charset=utf8mb4";

      $pdo = new PDO($dsn, $this->name, $this->pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $pdo;
      
    } catch (PDOException $e) {
      
      error_log("Error to conect to database: " . $e->getMessage());

      return null;
      
    }
  }
}