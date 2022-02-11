<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $msg = $_POST['message'];
    $password = $_POST['password'];

    echo "Привет, $name, мы свяжемся с вами по телефону $tel, а затем пришлём подтверждение на электронную почту $email.<br>";
    if ($msg !== "") {
        echo "Мы учтём Ваши пожелания: $msg <br>";
    }

    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $tel = htmlspecialchars($tel);
    $msg = htmlspecialchars($msg);
    $password = htmlspecialchars($password);

    $name = urldecode($name);
    $email = urldecode($email);
    $tel = urldecode($tel);
    $msg = urldecode($msg);
    $password = urldecode($password);

    $name = trim($name);
    $email = trim($email);
    $tel = trim($tel);
    $msg = trim($msg);
    $password = trim($password);

    if (mail("sergey.kostanets+form@gmail.com",
             "Новое письмо из тестовой формы",
             "Имя: ".$name."\n".
             "Электронная почта: ".$email."\n".
             "Телефон: ".$tel."\n".
             "Сообщение: ".$msg."\n".
             "Пароль: ".$password."\n".
             "From: no-reply@mydomain.com \r\n")
    )   {
        echo ('Письмо успешно отправлено.');
    }
    else {
        echo ('Есть ошибки. Проверьте данные!');
    }
?>