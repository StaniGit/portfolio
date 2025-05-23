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

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
    } else {
      entry.target.classList.remove('show');
    }
  });
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));
    const form = document.getElementById('contact-form');
    const successMessage = document.getElementById('success-message');

form.addEventListener('submit', async (e) => {
      e.preventDefault();
      const formData = new FormData(form);
      const response = await fetch(form.action, {
        method: form.method,
        body: formData,
        headers: {
          'Accept': 'application/json'
        }
      });

      if (response.ok) {
        form.reset();
        successMessage.classList.add('show');
      } else {
        alert('Une erreur est survenue. Veuillez réessayer.');
      }
    });
