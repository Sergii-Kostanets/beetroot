<?php
// через редбин не получилось
// require "libs/rb.php";
// R::setup(
//     'mysql:host=db;dbname=test',
//     'root',
//     'admin'
// );
//for both mysql or mariaDB
function dbConnect(): PDO
{
  static $db;

  if ($db === null) {
    $db = new PDO('mysql:host=db;dbname=test', 'root', 'admin', [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    $db->exec('SET NAMES UTF8');
  }
  return $db;
}

?>