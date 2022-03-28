<?php

namespace App\Controllers;

class Posts extends AbstractController{

    public function view(){

        $content = $this->viewTemplate('posts');
        $title = 'Posts list ' . time();

        return $this->viewWrapper($title, $content);

    }
}

?>