<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/todo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bad+Script">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <link rel="icon" type="image/gif" href="assets/animated_favicon.gif">
    <title>to-do list</title>

    <!-- стили для форм -->
    <!-- <title>HTML forms</title> -->
    <!-- <link href="style.css" rel="stylesheet"> -->

</head>

<body>

    <div id="todo">
        <h1>Мои списки дел <i id="pensil" class="fas fa-pencil-alt"></i></h1>
        <input type="text" placeholder="Добавить список">
        <ul class="todos">
            <li><span class="todo-text">Вымыть кухню</span><span class="todo-trash"><i
                        class="fas fa-trash-alt"></i></span></li>
            <li><span class="todo-text">Пойти в театр</span><span class="todo-trash"><i
                        class="fas fa-trash-alt"></i></span></li>
        </ul>
        <div id="buttons">
            <button class="save">Сохранить</button>
            <button class="clear">Очистить</button>
            <button class="showTips">Справка</button>
        </div>
    </div>
    <div id="overlay">
        <a href="javascript:void(0)" class="closeTips">&times;</a>
        <ul class="tips">
            <li>Чтобы спрятать или показать поле ввода, кликните на карандаш</li>
            <li>Для добавления списка дел напишите текст в поле ввода и нажмите Ввод</li>
            <li>Чтобы удалить один пункт, наведите на него и нажмите на значок корзины</li>
            <li>Чтобы удалить все списки дел, нажмите "Очистить"</li>
            <li>Нажмите "Сохранить", чтобы сохранить список дел на потом</li>
        </ul>
    </div>
    <script src="todo.js"></script>


    <!--
    <hr>
    <h1>Forms homework</h1>
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
    </form> -->

</body>

</html>