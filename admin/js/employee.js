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

let simage = document.getElementById("emp-img");
let inputF = document.getElementById("empinput");

inputF.onchange = function () {
  simage.src = URL.createObjectURL(inputF.files[0]);
  simage.style.visibility = "visible";
};
