let mode = "sign-up";

const tabs = document.querySelector("#tabs").children;
const signUpTab = tabs[0];
const signInTab = tabs[1];

const forms = document.querySelectorAll("#forms > div");
const section = document.querySelector("section");

signUpTab.addEventListener("click", () => {
  if (mode === "sign-in") {
    mode = "sign-up";
    formUpdate();
  }
});

signInTab.addEventListener("click", () => {
  if (mode === "sign-up") {
    mode = "sign-in";
    formUpdate();
  }
});

function formUpdate() {
  Array.from(forms).forEach((form) => form.classList.toggle("form-hide"));
  section.classList.toggle("sign-in-mode");
  section.classList.toggle("sign-up-mode");
}
