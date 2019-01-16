var expandButton = document.querySelector(".expand");
var navButtons = document.querySelectorAll(".nav-button");
var navbar = document.querySelector(".navContainer");
const ham = document.querySelector('.hamburger');
const l1 = ham.querySelector('.l1');
const l2 = ham.querySelector('.l2');
const l3 = ham.querySelector('.l3');

const tl = new TimelineLite({paused: true, reversed: true});

tl
  .to(l2, 0.15, {scaleX: 0, transformOrigin: "middle" })
  .to(l1, 0.15, {y: 17},"start")
  .to(l3, 0.15, {y: -17}, "start")
  .to(l1, 0.2, {rotation: 45, transformOrigin: "middle",  ease: Power3.easeOut}, "rotation")
  .to(l3, 0.2, {rotation: -45, transformOrigin: "middle",  ease: Power3.easeOut}, "rotation");


navButtons.forEach(button => button.addEventListener("click", () => {
  navbar.classList.remove("expanded");
  tl.reversed() ? tl.play() : tl.reverse();
}));

//Hamburger Click Event
expandButton.addEventListener("click", () => {
  console.log("hamburger clicked");
  tl.reversed() ? tl.play() : tl.reverse();

  if(navbar.classList.contains("expanded"))
    navbar.classList.remove("expanded");
  else {
    navbar.classList.add("expanded");
  }
});
