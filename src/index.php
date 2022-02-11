<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO list</title>
    <link href="style/style.css" rel="stylesheet">
</head>

<body>

    <!-- Началась визуальная часть -->
    <!-- Ограничиваем ширину списка и ставим его по центру -->
    <div class="container" style="width: 400px; margin: auto;">
        <!-- Заголовок списка -->
        <h2 class="todo__caption">Список задач</h2>
        <!-- Поле ввода, куда пишем новые задачи -->
        <div id="tdlApp">
            <input type="text" class="form-control" placeholder="Новая задача" autofocus>
            <br>
            <!-- Создаём пока ещё пустой список -->
            <div class="tdlDiv">
                <ul class="List list-unstyled">
                    <!-- Тут появятся наши задачи, когда мы их добавим -->
                </ul>
            </div>
        </div>
        <!-- Закончили с оформлением списка -->
    </div>
    <!-- Закончилась видимая часть -->
    <!-- Подключаем JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <!-- Пишем скрипт, который будет обрабатывать наши задачи и хранить их на нашем устройстве -->
    <script>
    // Заводим переменные под наши задачи
    var List = $('#tdlApp ul');
    var Mask = 'tdl_';
    // Функция, которая берёт из памяти наши задачи и делает из них список
    function showTasks() {
        // Узнаём размер хранилища
        var Storage_size = localStorage.length;
        // Если в хранилище что-то есть…
        if (Storage_size > 0) {
            // то берём и добавляем это в задачи
            for (var i = 0; i < Storage_size; i++) {
                var key = localStorage.key(i);
                if (key.indexOf(Mask) == 0) {
                    // и делаем это элементами списка
                    $('<li></li>').addClass('tdItem')
                        .attr('data-itemid', key)
                        .text(localStorage.getItem(key))
                        .appendTo(List);
                }
            }
        }
    }
    // Сразу вызываем эту функцию, вдруг в памяти уже остались задачи с прошлого раза
    showTasks();
    // Следим, когда пользователь напишет новую задачу в поле ввода и нажмёт Enter
    $('#tdlApp input').on('keydown', function(e) {
        if (e.keyCode != 13) return;
        var str = e.target.value;
        e.target.value = "";
        // Если в поле ввода было что-то написано — начинаем обрабатывать
        if (str.length > 0) {
            var number_Id = 0;
            List.children().each(function(index, el) {
                var element_Id = $(el).attr('data-itemid').slice(4);
                if (element_Id > number_Id)
                    number_Id = element_Id;
            })
            number_Id++;
            // Отправляем новую задачу сразу в память
            localStorage.setItem(Mask + number_Id, str);
            // и добавляем её в конец списка
            $('<li></li>').addClass('tdItem')
                .attr('data-itemid', Mask + number_Id)
                .text(str).appendTo(List);
        }
    });
    // По клику на задаче — убираем её из списка
    $(document).on('click', '.tdItem', function(e) {
        // Находим задачу, по которой кликнули
        var jet = $(e.target);
        // Убираем её из памяти
        localStorage.removeItem(jet.attr('data-itemid'));
        // и убираем её из списка
        jet.remove();
    })
    // Закончился основной скрипт
    </script>
    <!-- Закончилось содержимое страницы-->

</body>

</html>