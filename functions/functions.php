<?php 

function isUri($uri) {
  return parse_url($_SERVER['REQUEST_URI'])['path'] === $uri;
};

function dd($value) {
  echo '<pre>';
  var_dump($value);
  echo '</pre>';

  die();
} 