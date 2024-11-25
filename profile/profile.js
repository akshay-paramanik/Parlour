// function tabClick(btnId, tabId) {
//   let btn = document.getElementById(btnId);
//   let tab = document.getElementById(tabId);
//   btn.classList.add("active");
//   tab.style.display = "inline-block";

// }
let btns = document.getElementsByClassName("btn-group");
let done = document.getElementById("apnt-done");
let pendding = document.getElementById("apnt-pendding");
let garary = document.getElementById("galary");
for (i = 0; i < btns.length; i++) {
  btns[0].classList.add("active");
  done.style.display = "inline-block";
  btns[i].addEventListener("click", (e) => {
    hide();
    block();
    e.target.classList.add("active");
    if (e.target.id == "done") {
      done.style.display = "inline-block";
    } else if (e.target.id == "pendding") {
      pendding.style.display = "inline-block";
    } else if (e.target.id == "garaly-apnt") {
      garary.style.display = "grid";
    }
  });
}
function hide() {
  for (i = 0; i < btns.length; i++) {
    btns[i].classList.remove("active");
  }
}
function block() {
  done.style.display = "none";
  pendding.style.display = "none";
  galary.style.display = "none";
}
let nameId = document.getElementById("name");
let nameClass = document.querySelectorAll(".name");
let idval = nameId.innerText;
nameClass.forEach((val) => {
  val.innerHTML = idval;
});
