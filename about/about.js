function myfun(id, emp) {
  modal = document.getElementById(id);
  // console.log(empid);
  modal.style.display = "block";
  ajaxP(emp);
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
var menu = document.getElementById("menu");
var navbar = document.getElementById("navbar-item");
var close = document.querySelector("#close");
menu.addEventListener("click", () => {
  navbar.style.display = "inline-block";
  menu.style.display = "none";
});
close.addEventListener("click", () => {
  navbar.style.display = "none";
  menu.style.display = "inline-block";
});
function ajaxP(empid) {
  $.ajax({
    url: "../admin/pages/ajaxForm.php",
    type: "POST",
    data: {
      id: empid,
    },
    success: function (result) {
      $("#myModal").html(result);
    },
  });
}
