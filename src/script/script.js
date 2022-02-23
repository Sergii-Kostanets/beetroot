// Объявляем переменные
let addMessage = document.querySelector('.message'),
    addButton = document.querySelector('.add'),
    todo = document.querySelector('.todo')
// Будем добавлять задачи в массив
let todoList = []
// Храним задачи в локальном хранилище
if (localStorage.getItem('todo')) {
    todoList = JSON.parse(localStorage.getItem('todo'))
    displayMessages()
}
// Кнопка по клику добавляет новую задачу
addButton.addEventListener('click', function () {
    if (!addMessage.value) return
    let newTodo = {
        todo: addMessage.value,
        checked: false,
        important: false,
    }
    todoList.push(newTodo)
    displayMessages()
    localStorage.setItem('todo', JSON.stringify(todoList))
    addMessage.value = ''
})
// По нажатию на клавиатуре Энтер - тоже добавляется задача
addMessage.addEventListener('keydown', function (event) {
    if (!addMessage.value) return

    if (event.code == 'Enter') {

        let newTodo = {
            todo: addMessage.value,
            checked: false,
            important: false,
        }
        todoList.push(newTodo)
        displayMessages()
        localStorage.setItem('todo', JSON.stringify(todoList))
        addMessage.value = ''
    } else {
        return
    }
})
// Добавляем задачи на страницу
function displayMessages() {
    let displayMessage = ''
    if(todoList.length === 0) todo.innerHTML = ''
    todoList.forEach(function (item, i) {
        displayMessage += `
        <li>
        <input type='checkbox' id='item_${i}' ${item.checked ? 'checked' : ''}>
        <label for='item_${i}' class='${item.important ? 'important' : ''}'>${item.todo}</label>
        </li>
        `
        todo.innerHTML = displayMessage
    })
}
// Сохраняем чекбоксы при обновлении страницы
todo.addEventListener('change', function (event){
    let valueLabel = todo.querySelector('[for=' + event.target.getAttribute('id') + ']').innerHTML;

    todoList.forEach(function (item) {
        if (item.todo === valueLabel) {
            item.checked = !item.checked
            localStorage.setItem('todo', JSON.stringify(todoList))
        }
    })
})
// Убираем стандартное контекстное меню. Правая кнопка выделяет важные. Клик правой с зажатой контрл/команд - удаляет.
todo.addEventListener('contextmenu', function (event) {
    event.preventDefault()
    todoList.forEach(function (item, i) {
        if (item.todo === event.target.innerHTML) {
            if(event.ctrlKey || event.metaKey){
                todoList.splice(i, 1)
            }else{
                item.important = !item.important
            }
            displayMessages()
            localStorage.setItem('todo', JSON.stringify(todoList))
        }
    })
})