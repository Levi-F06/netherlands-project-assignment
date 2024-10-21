const buttons = document.querySelectorAll(".control");
const viewBtns = document.querySelectorAll(".view-button");
const createEventForm = document.querySelector("#create-event");

const eventOverlay = document.querySelector("#eventOverlay");

if (buttons) {
  buttons[1].addEventListener("click", () => {
    createEventForm.classList.toggle("hide-me");
    buttons[1].classList.toggle("active-button");
  });
}

[...viewBtns].map((btn) =>
  btn.addEventListener("click", () => {
    // btn -> controlsDiv -> eventDiv.id
    viewEvent(btn.parentElement.parentElement.id, btn);
  }),
);

function viewEvent(uid, btn) {
  eventOverlay.innerHTML = `
    `;
}
