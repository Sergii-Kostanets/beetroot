<?php

function dbConnect(): PDO
{
  static $db;

  if ($db === null) {
    $db = new PDO('mysql:host=db;dbname=test', 'root', 'root', [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    $db->exec('SET NAMES UTF8');
  }
  return $db;
}

?>