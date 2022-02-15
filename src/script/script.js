const btn = document.querySelector(".add");
const inpt = document.querySelector(".message");
const todo = document.querySelector(".todo")

function newText() {
    const messageText = document.createElement("li");
    messageText.className = "task";
    messageText.innerText = inpt.value;
    todo.appendChild(messageText);
    inpt.value = ""
}

btn.addEventListener("click", newText);



const li = document.querySelectorAll(".task");

li.forEach((i) => {
    i.addEventListener("click", () => {
        i.classList.toggle("active");
    })
})

