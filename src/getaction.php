<?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $tel =$_GET['tel'];
    $msg = $_GET['message'];

    echo "Привет, $name, мы свяжемся с вами по телефону $tel, а затем пришлём подтверждение на электронную почту $email. ";
    if ($msg !== "") {
        echo "Мы учтём Ваши пожелания: $msg";
    }
?>