const drop = document.getElementById("drop-down");
const list = document.getElementById("drop-list");
drop.addEventListener("mouseover", () => {
  list.style.display = "inline-block";
});
list.addEventListener("mouseleave", () => {
  list.style.display = "none";
});

function myfun(id) {
  modal = document.getElementById(id);
  modal.style.display = "block";
}
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
function closeWin(id) {
  const closeId = document.getElementById(id);
  closeId.style.display = "none";
}

let simage = document.getElementById("service-img");
let inputF = document.getElementById("sinput");

inputF.onchange = function () {
  simage.src = URL.createObjectURL(inputF.files[0]);
  simage.style.visibility = "visible";
};
