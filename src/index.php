<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML forms</title>
    <link href="style.css" rel="stylesheet">
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
                <input required type="text" name="name" id="name" placeholder="Введите Ваше имя"
                    pattern="^[А-Яа-яЁёA-Za-z]{2,15}" title="Подсказка" autofocus>
            </p>
            <p>
                <label for="email">E-mail <em>*</em></label>
                <input required type="email" name="email" id="email" placeholder="Введите Вашу электронную почту">
            </p>
            <p>
                <label for="password">Пароль <em>*</em></label>
                <input required type="password" name="password" id="password" placeholder="Введите Ваш пароль"
                    pattern="^[А-Яа-яЁёA-Za-z]{2,15}" title="Подсказка" autofocus>
            </p>
            <p>
                <label for="tel">Телефон <em>*</em></label>
                <input required type="tel" name="tel" id="tel" placeholder="Введите номер Вашего телефона"
                    pattern="^[+][0-9]{3}[0-9]{2}[0-9]{3}[0-9]{4}$">
            </p>
            <p>
                <label for="msg">Сообщение</label>
                <textarea id="msg" name="message"></textarea>
            </p>
            <p>Ваш пол</p>
            <p>
                <input type="radio" name="sex" id="male" value="male">
                <label for="male">Мужской</label>
            </p>
            <p>
                <input type="radio" name="sex" id="female" value="female">
                <label for="female">Женский</label>
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