<?php

require "./libs/rb.php";
R::setup(
    'mysql:host=phpmyadmin.${PROJECT_BASE_URL};dbname=db',
    'root',
    'admin'
); //for both mysql or mariaDB

?>