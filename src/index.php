<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="./style/style.css">
    <title>ToDoList</title>
</head>

<body>
    <div class="container-fluid">
        <div class="todo_list">
            <h1>ToDo List</h1>
            <div class="create_new_todo">
                <input type="text" class="message col-md-6" placeholder="Описание" autofocus tabindex="1">
                <button class="add col-md-6" tabindex="2">Добавить</button>
            </div>
            <div class="wrapper">
                <ul class="todo"></ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4" style="background-color: white;">FIRST</div>
        <div class="col-sm-4" style="background-color: white;">SECOND</div>
        <div class="col-sm-4" style="background-color: white;">THIRD</div>
    </div>

    <script src="./script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>