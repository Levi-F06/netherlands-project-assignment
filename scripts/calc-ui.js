const startBtn = document.querySelector("#startButton");
const intro = document.querySelector("#intro");

const mainContainer = document.querySelector("#form");
const formNodes = document.querySelectorAll(".question");
const inputs = document.querySelectorAll("input");

const buttons = document.querySelector("#buttons").children;

let index = 0;

startBtn.addEventListener("click", () => {
  intro.classList.toggle("hide-me");
  mainContainer.classList.toggle("hide-me");
  [...formNodes].map((node) => node.classList.toggle("hide-me"));
  update_node();
});

function update_node() {
  [...formNodes]
    .filter((node) => !node.classList.contains("hide-me"))
    .map((node) => node.classList.toggle("hide-me"));
  formNodes[index].classList.toggle("hide-me");
  if (index === 7) {
    buttons[2].classList.remove("hide-me");
    buttons[1].classList.add("hide-me");
  } else {
    buttons[2].classList.add("hide-me");
    buttons[1].classList.remove("hide-me");
  }
}

buttons[0].addEventListener("click", () => {
  if (index > 0) {
    index--;
    update_node();
  }
});

buttons[1].addEventListener("click", () => {
  if (inputs[index].value) {
    if (index < 7) {
      index++;
      update_node();
    }
  } else {
    alert("Please complete this section");
  }
});
