<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML forms</title>
</head>

<body>

    <h1>Forms homework</h1>
    <!-- проверка раотоспособности php -->
    <?php
    echo '<p>Привет из php</p>';
    ?>

    <form action="postaction.php" method="post">
        <fieldset>
            <legend>Контактная информация (метод POST)</legend>
            <p>
                <label for="name">Имя <em>*</em></label>
                <input required type="text" name="name" id="name" placeholder="Введите Ваше имя" autofocus>
            </p>
            <p>
                <label for="email">E-mail <em>*</em></label>
                <input required type="email" name="email" id="email" placeholder="Введите Вашу электронную почту">
            </p>
            <p>
                <label for="tel">Телефон <em>*</em></label>
                <input required type="tel" name="tel" id="tel" placeholder="Введите номер Вашего телефона">
            </p>
            <p>
                <label for="msg">Сообщение</label>
                <textarea id="msg" name="message"></textarea>
            </p>
            <p><input type="submit" value="Отправить"></p>
            <p><input type="reset" value="Очистить"></p>

        </fieldset>
    </form>

    <form action="getaction.php" method="get">
        <fieldset>
            <legend>Контактная информация (метод GET)</legend>
            <p>
                <label for="name">Имя <em>*</em></label>
                <input required type="text" name="name" id="name" placeholder="Введите Ваше имя" autofocus>
            </p>
            <p>
                <label for="email">E-mail <em>*</em></label>
                <input required type="email" name="email" id="email" placeholder="Введите Вашу электронную почту">
            </p>
            <p>
                <label for="tel">Телефон <em>*</em></label>
                <input required type="tel" name="tel" id="tel" placeholder="Введите номер Вашего телефона">
            </p>
            <p>
                <label for="msg">Сообщение</label>
                <textarea id="msg" name="message"></textarea>
            </p>
            <p><input type="submit" value="Отправить"> или <input type="reset" value="Очистить"></p>
        </fieldset>
    </form>

</body>

</html>