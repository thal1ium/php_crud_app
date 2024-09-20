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
  
      return $pdo;
    } catch (PDOException $e) {
      echo "Error: $e";
      die();
    }
  }
}