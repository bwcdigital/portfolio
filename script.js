document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("scroll", function () {
    var scrollPosition = window.scrollY;
    var logo = document.querySelector(".logo");

    console.log("Scroll position:", scrollPosition);

    if (logo) {
      if (scrollPosition >= 0.5 * window.innerHeight) {
        logo.classList.add("show");
        console.log("Logo shown");
      } else {
        logo.classList.remove("show");
        console.log("Logo hidden");
      }
    } else {
      console.warn("Logo element not found!");
    }
  });
});

var slideMenu = document.getElementById("ulMenu");
var closeIcon = document.getElementById("closeIcon");
var slideIcon = document.getElementById("slideIcon");

function showMenu() {
  slideMenu.style.right = "0px";
  // slideIcon.style.display = "none";
}
function hideMenu() {
  slideMenu.style.right = "-150px";
  slideIcon.style.display = "none";
}
