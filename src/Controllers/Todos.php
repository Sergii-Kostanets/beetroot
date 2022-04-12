<?php

namespace App\Controllers;

use App\Models\Todo;

class Todos extends AbstractController {
    public function view() {
        $vars = [];
        $entityManager = getEntityManager();
        $todoRepository = $entityManager->getRepository(Todo::class);



        if  (!empty($_POST)){
            $todo = new Todo($_POST['name'], !empty($_POST['active']));
            $entityManager->persist($todo);
            $entityManager->flush();
            $vars['new_todo'] = $todo;
        }

        // dont work
        if (!empty($_GET["id"])) {
            $id = $_GET["id"];
            $task = $todoRepository->find($id);
            $entityManager->remove($task);
            $entityManager->flush();
        }

        if (!empty($_GET["delete"])) {
            $tasks = $todoRepository->findAll();
            foreach ($tasks as $task) {
                $entityManager->remove($task);
            }
            $entityManager->flush();
        }
        // dont work

        $vars['items'] = $todoRepository->findAll();
        $content = $this->viewTemplate('todos', $vars);
        $title = 'Todo list';

        return $this->viewWrapper($title, $content);
    }
}
?>