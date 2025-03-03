let inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus",focusFunc);
  input.addEventListener("blur",blurFunc);
});

function toggleMenu() {
    const menu = document.querySelector(".menu-links");
    menu.classList.toggle("open");
    icon.classList.toggle("open");
}

document.querySelector('form').addEventListener('submit', function() {
  document.querySelector('input[type="submit"]').disabled = true;
})