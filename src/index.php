<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO list</title>
    <link href="./style/style.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <h1>Список дел</h1>
            <input type="text" placeholder="Введите новое дело..." id="toDoEl" autofocus tabindex="1">
            <span class="addBtn" onclick="newElement()" tabindex="2">Добавить</span>
        </div>
        <ul id="list">
        </ul>
    </div>
    <script src="./script/script.js"></script>
</body>

</html>