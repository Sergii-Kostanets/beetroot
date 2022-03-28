<?php

namespace App\Controllers;

class Posts extends AbstractController{

    public function view(){

        $content = $this->viewTemplate('posts', [
            'current_post' => 'None',
        ]);
        $title = 'Posts list ' . time();

        return $this->viewWrapper($title, $content);

    }
}

?>