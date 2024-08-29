// document.addEventListener("DOMContentLoaded", function () {
//   var wd = window.innerWidth;
//   if (wd > 600) {
//     var logo = document.querySelector(".logo");
//     logo.classList.remove("show");
//   }
//   window.addEventListener("scroll", function () {
//     var scrollPosition = window.scrollY;
//     var logo = document.querySelector(".logo");

//     console.log("Scroll position:", scrollPosition);

//     if (wd > 600) {
//       if (logo) {
//         if (scrollPosition >= 0.5 * window.innerHeight) {
//           logo.classList.add("show");
//         } else {
//           logo.classList.remove("show");
//         }
//       } else {
//         console.warn("Logo element not found!");
//       }
//     } else logo.classList.add("show");
//   });
// });

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

// script.js
// script.js
const images = [
  "https://plus.unsplash.com/premium_photo-1685086785054-d047cdc0e525?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8d2ViJTIwZGV2ZWxvcG1lbnR8ZW58MHx8MHx8fDA%3D",
  "https://wallpapers.com/images/hd/civil-engineering-background-yslw7d3oel5m2qfp.jpg",
  "https://e1.pxfuel.com/desktop-wallpaper/626/499/desktop-wallpaper-software-web-development.jpg",
];

let currentIndex = 0;

function changeBackground() {
  const homeElement = document.getElementById("home");
  currentIndex = (currentIndex + 1) % images.length;
  homeElement.style.backgroundImage = `url('${images[currentIndex]}')`;
}

// Change the background image every 5 seconds (5000 milliseconds)
// setInterval(changeBackground, 5000);

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
