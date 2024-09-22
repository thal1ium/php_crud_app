<?php

require 'app/core/Database.php';

class HomeModel extends Database {
  private $query;
  
  public function __construct($host, $port, $name, $pass, $dbname, $query)
  {
    parent::__construct($host, $port, $name, $pass, $dbname);

    $this->query = $query; 
  }
  
  public function query() 
  {
    try {
      
      $pdo = $this->connect();

      // перевірка на підключення
      if ($pdo === null) {
        throw new Exception("Connection failed.");
      }

      $statement = $this->connect()->prepare($this->query);
      $statement->execute();

      $result = $statement->fetchAll(PDO::FETCH_ASSOC);
      return $result;

    } catch (PDOException $e) {
      error_log($e);
      
      return 0;
    }
  }
}