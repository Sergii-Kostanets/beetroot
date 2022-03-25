<?php

namespace App;

class Router {

        public function dispatch(string $request_uri){

            switch ($request_uri) {
                case '/':
                    $template = 'homepage';
                    break;
                case '/posts':
                    $template = 'posts';
                    break;
                case '/users':
                    $template = 'users';
                    break;
                default:
                    $template = 'not-found';
                    break;
            }
            return $this->viewTemplate($template);
        }

        public function viewTemplate(string $template){
            $template_file = __DIR__ . '/templates/' . $template . '.html.php';
            // print_r($template_file);die;
            if(!file_exists($template_file)){
                $template_file = './templates/not-found.html.php';
        }
        // Open buffer
        // ob_start();
        // print "123";
        // require $template_file;
        // or
        include $template_file;
        // $output = ob_get_clean();
        // return $output;
        }
}