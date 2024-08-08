document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("scroll", function () {
    var scrollPosition = window.scrollY;
    var logo = document.querySelector(".logo");

    console.log("Scroll position:", scrollPosition);
    var wd = this.window.innerWidth;
    if (wd > 600) {
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
    } else logo.classList.add("show");
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
  // slideIcon.style.display = "none";
}

// document.addEventListener("DOMContentLoaded", function () {
//   // Get all buttons and text contents
//   var buttons = document.querySelectorAll(".read-more-btn");
//   var contents = document.querySelectorAll(".text-content");

//   // Iterate over each button
//   buttons.forEach(function (button, index) {
//     button.addEventListener("click", function () {
//       var content = contents[index];

//       if (content.classList.contains("expanded")) {
//         content.classList.remove("expanded");
//         button.textContent = "Read More";
//       } else {
//         content.classList.add("expanded");
//         button.textContent = "Read Less";
//       }
//     });
//   });
// });
