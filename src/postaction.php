<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $msg = $_POST['message'];
    $password = $_POST['password'];

    echo "Привет, $name, мы свяжемся с вами по телефону $tel, а затем пришлём подтверждение на электронную почту $email. ";
    if ($msg !== "") {
        echo "Мы учтём Ваши пожелания: $msg";
    }
?>