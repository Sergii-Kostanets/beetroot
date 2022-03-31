<?php

namespace App\Controllers;

use App\Database;
use App\Models\Todo;

class Todos extends AbstractController {
    public function view() {
        $items = [];
        // $items[] = new Todo('Todo 1');
        // $items[] = new Todo('Todo 2');
        // $items[] = new Todo('Todo 3');
        $content = $this->viewTemplate('todos', [
            'items' => $items,
        ]);
        $title = 'Todo list';

        return $this->viewWrapper($title, $content);
    }
}
?>