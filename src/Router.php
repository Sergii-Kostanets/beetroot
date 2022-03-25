<?php

namespace App;

class Router {

    public function dispatch(string $request_uri){

        switch ($request_uri) {
            case '/':
                $title = 'Main page';
                $template = 'homepage';
                break;
            case '/posts':
                $title = 'List of posts';
                $template = 'posts';
                break;
            case '/users':
                $title = 'List of users';
                $template = 'users';
                break;
            default:
                $title = 'Page not found';
                $template = 'not-found';
                break;
        }
        $content = $this->viewTemplate($template);

        return $this->viewWrapper($title, $content);
    }

    public function viewWrapper(string $title, string $content){
        $time = time();
        ob_start();
        include __DIR__ . '/templates/html.php';
        return ob_get_clean();
    }

    public function viewTemplate(string $template){
        $template_file = __DIR__ . '/templates/' . $template . '.html.php';
        // print_r($template_file);die;

        // dont need this?
        if(!file_exists($template_file)){
            $template_file = './templates/not-found.html.php';
        }

        // Open buffer
        ob_start();
        include $template_file; // require
        $output = ob_get_clean();
        return $output;
    }
}