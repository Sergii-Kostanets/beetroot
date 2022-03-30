<?php

namespace App\Controllers;

use App\Database;
use App\Models\Todo;

class Todos extends AbstractController {

    private Database $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function view() {
        $items = [];
        $items[] = new Todo('Todo 1');
        $items[] = new Todo('Todo 2');
        $items[] = new Todo('Todo 3');
        // $items = $this->db->query('SELECT * from todos');
        $content = $this->viewTemplate('todos', [
            'items' => $items,
        ]);
        $title = 'Todo list';

        return $this->viewWrapper($title, $content);
    }
}
?>