<?php

namespace App\Controllers;

abstract class AbstractController{

    abstract public function view();

    public function viewWrapper(string $title, string $content)
    {
        $time = time();
        ob_start();
        include __DIR__ . '/../templates/html.php';
        return ob_get_clean();
    }

    public function viewTemplate(string $template){
        $template_file = __DIR__ . '/../templates/' . $template . '.html.php';

        // dont need this?
        if (!file_exists($template_file)) {
            $template_file = '/../templates/not-found.html.php';
        }

        ob_start();
        include $template_file;
        $output = ob_get_clean();
        return $output;
    }

}

?>