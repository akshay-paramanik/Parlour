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
gsap.from("#whold", {
  y: -50,
  duration: 1,
  scrollTrigger: {
    trigger: "#whold",
    scroller: "body",
    start: "top 70%",
    end: "top 50%",
  },
  stagger: true,
});
gsap.from("#mhold", {
  y: -50,
  duration: 1,
  scrollTrigger: {
    trigger: "#mhold",
    scroller: "body",
    start: "top 70%",
    end: "top 50%",
  },
  stagger: true,
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
