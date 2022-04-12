<?php

namespace App\Controllers;

use App\Models\Reg;

class Regs extends AbstractController
{

    public function view()
    {
        $entityManager = getEntityManager();
        if ($_POST) {
            $user = new Reg($_POST['login'], $_POST['password']);
            $entityManager->persist($user);
            $entityManager->flush();
            header("Location: /login");
        }

        $content = $this->viewTemplate('reg');
        $title = 'Reg In ' . time();

        return $this->viewWrapper($title, $content);
    }
}
?>