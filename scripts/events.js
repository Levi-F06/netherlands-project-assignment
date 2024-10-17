const buttons = document.querySelectorAll(".control");
const createEventForm = document.querySelector("#create-event");

if (buttons) {
  buttons[1].addEventListener("click", () => {
    createEventForm.classList.toggle("hide-me");
    buttons[1].classList.toggle("active-button");
  });
}
