<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style/style.css">
    <title>ToDoList</title>
</head>

<body>
    <div class="container">
        <div class="todo_list">
            <h1>ToDo list</h1>
            <div class="create_new_todo">
                <input type="text" class="message" placeholder="Описание" autofocus>
                <button class="add">Добавить</button>
            </div>
            <div class="wrapper">
                <ul class="todo"></ul>
            </div>
        </div>
    </div>
    <script src="./script/script.js"></script>
</body>

</html>