<?php

require 'config/config.php';
include 'app/models/homeModel.php';

$page_name = "CRUD APP | Home";

try {

  $connect = new HomeModel($host, $port, $name, $pass, $dbname, "SELECT * FROM crud_app.posts;");

  $res = $connect->query();

} catch(Exception $e) {
  
  error_log("Connection failed: " . $e->getMessage());
  
  $res = '';
  
}

require 'app/views/home.view.php';

