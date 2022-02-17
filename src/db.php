<?php

require "libs/rb.php";
R::setup(
    'mysql:host=${PROJECT_BASE_URL};dbname=test',
    'root',
    'admin'
); //for both mysql or mariaDB

?>