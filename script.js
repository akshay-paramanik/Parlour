function rightClick(containerId) {
  const container = document.getElementById(containerId);
  container.scrollLeft += 80;
}
function leftClick(containerId) {
  const container = document.getElementById(containerId);
  container.scrollLeft -= 80;
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
let req = document.getElementById("req");
// let msg = req.innerText;
// if (msg != "") {
//   alert(msg);
//   console.log(msg);
//   msg.innerHtml = "";
//   window.location.href = "index.php";
// }
gsap.from(".brand", {
  y: -100,
  duration: 1,
  opacity: 0,
});
gsap.from(".brand h1", {
  x: 100,
  opacity: 0,
  duration: 1,
});
gsap.from(".heading h1", {
  x: -50,
  y: -40,
  duration: 1,
});
gsap.from(".heading h4", {
  opacity: 0,
  delay: 1,
});
gsap.from("#women .services-container", {
  x: 150,
  duration: 2,
});
gsap.from("#men .services-container", {
  x: 150,
  duration: 2,
  scrollTrigger: {
    trigger: "#men",
    scroller: "body",
    start: "top 90%",
    end: "top 30%",
  },
});
gsap.from(".product", {
  opacity: 0,
  duration: 1,
  y: 50,
  scrollTrigger: {
    trigger: ".product",
    scroller: "body",
    start: "top 90%",
    end: "top 30%",
  },
});
gsap.from(".text-container", {
  opacity: 0,
  duration: 1,
  y: -50,
  scrollTrigger: {
    trigger: ".product",
    scroller: "body",
    start: "top 90%",
    end: "top 30%",
  },
});
gsap.from(".item img", {
  y: 200,
  duration: 1,
  scrollTrigger: {
    trigger: ".item",
    scroller: "body",
    start: "top 90%",
    end: "top 30%",
  },
});

gsap.from(".story", {
  opacity: 0,
  duration: 1,
  y: 50,
  scrollTrigger: {
    trigger: ".story",
    scroller: "body",
    start: "top 90%",
    end: "top 30%",
  },
});
gsap.from(".story-content", {
  opacity: 0,
  duration: 1,
  y: -50,
  scrollTrigger: {
    trigger: ".story",
    scroller: "body",
    start: "top 90%",
    end: "top 30%",
  },
});
gsap.from(".uper-body", {
  x: 100,
  y: -50,
  duration: 0.5,
});
gsap.from(".footer", {
  duration: 1,
  y: 200,
  scrollTrigger: {
    trigger: ".footer",
    scroller: "body",
    start: "top 90%",
    end: "top 30%",
  },
});
