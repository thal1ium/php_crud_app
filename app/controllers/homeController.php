<?php

require 'config/config.php';
require 'app/models/homeModel.php';

$page_name = "CRUD APP | Home";

$connect = new HomeModel($host, $port, $name, $pass, $dbname, "SELECT * FROM crud_app.posts;");

$res = $connect->query();

require 'app/views/home.view.php';

