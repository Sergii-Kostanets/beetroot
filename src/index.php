<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker</title>
</head>

<body>
    <h1>Forms homework</h1>
    <?php
    echo '<p>Привет из php</p>';
    ?>
    <form action="GET">
        <fieldset>
            <legend>Контактная информация</legend>
            <p>
                <label for="name">Имя <em>*</em></label>
                <input type="text" id="name" autofocus>
            </p>
            <p>
                <label for="email">E-mail</label>
                <input type="email" id="email">
            </p>
            <p><input type="submit" value="Отправить"></p>
        </fieldset>
    </form>

</body>

</html>
<!-- docker.for.mac.localhost or docker.for.mac.host.internal -->