let check = document.getElementsByName("gen");
let val = document.getElementById("val");
let chs;
for (i = 0; i < check.length; i++) {
  if (check[i].checked) {
    chs = check[i].value;
    console.log(chs);
  }
}
for (i = 0; i < check.length; i++) {
  check[i].addEventListener("click", (e) => {
    chs = e.target.value;
    console.log(chs);
    val.innerHTML = chs;
    genFun(chs);
    // serArtist(chs);
  });
}
val.innerHTML = chs;
function genFun(value) {
  $.ajax({
    url: "../admin/pages/ajaxForm.php",
    type: "POST",
    data: {
      gen: value,
    },
    success: function (result) {
      $("#genService").html(result);
    },
  });
  $.ajax({
    url: "../admin/pages/ajaxForm.php",
    type: "POST",
    data: {
      artist: value,
    },
    success: function (art) {
      $("#artist").html(art);
    },
  });
}
genFun(`${chs}`);
// serArtist(`${chs}`);
const selectedValue = $("#genService").html();
console.log(selectedValue);
$("#genService").click(function () {
  let selectedValue = $("#genService").val();
  $.ajax({
    url: "../admin/pages/ajaxForm.php",
    type: "POST",
    data: {
      price: selectedValue,
    },
    success: function (result) {
      $("#price").html(result);
    },
  });
});
// function serArtist(value) {
//   $.ajax({
//     url: "../admin/pages/ajaxForm.php",
//     type: "POST",
//     data: {
//       artist: value,
//     },
//     success: function (result) {
//       $("#artist").html(result);
//     },
//   });
// }
function artistS(value) {
  $.ajax({
    url: "../admin/pages/ajaxForm.php",
    type: "POST",
    data: {
      Info: value,
    },
    success: function (art) {
      $("#artistInfo").html(art);
    },
  });
  document.querySelector(".artist-details").style.display = "block";
  window.location.href = "booking.php?#artistD";
}
$("#submit").on("click", () => {
  alert("Your Appointment is booked");
});
