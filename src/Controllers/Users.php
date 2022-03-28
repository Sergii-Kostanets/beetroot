<?php

namespace App\Controllers;

class Users extends AbstractController{

    public function view(){

        $content = $this->viewTemplate('users');
        $title = 'Users list ' . time();

        return $this->viewWrapper($title, $content);

    }
}

?>