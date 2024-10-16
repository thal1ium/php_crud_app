<?php

require 'config/config.php';
include 'app/models/homeModel.php';

$page_name = "CRUD APP | Home";

try {

  $id = $_GET['id'];

  if ($id) {
    $query = "SELECT * FROM crud_app.posts where id = ?;";
    $connect = new HomeModel($host, $port, $name, $pass, $dbname, $query, ["$id"]);
  } else {
    $query = "SELECT * FROM crud_app.posts;";
    $connect = new HomeModel($host, $port, $name, $pass, $dbname, $query);
  }



  $res = $connect->query();

  // dd($res);

} catch(Exception $e) {
  
  error_log("Connection failed: " . $e->getMessage());
  
  $res = '';
  
}

require 'app/views/home.view.php';

