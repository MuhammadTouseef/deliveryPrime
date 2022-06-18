const humbtn = document.getElementById("dashhumburger");
const userbtn = document.getElementById("usricn");

humbtn.addEventListener("click", () => {
  document.getElementById("dashsidebar").classList.toggle("d-none");
  document.getElementById("dashmain").classList.toggle("d-none");
});

userbtn.addEventListener("click", () => {
  document.querySelector(".useropt").classList.toggle("d-none");
});
