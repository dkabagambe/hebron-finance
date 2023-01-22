const hamburger = document.getElementById("hamburger");
hamburger.addEventListener("click", function (e) {
  const ul = document.querySelector("nav>ul");
  ul.classList.toggle("show");
  hamburger.classList.toggle("cross");
});
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// this is the js for the progress bar

// var form = document.getElementById("myForm");
// var progressBar = document.getElementById("progressBar");
// var section1 = document.getElementById("section1");
// var section2 = document.getElementById("section2");
// var section3 = document.getElementById("section3");
// var section4 = document.getElementById("section4");
// var nextBtn = document.getElementById("nextBtn");
// var prevBtn = document.getElementById("prevBtn");
// var currentSection = 1;
// var totalSections = 4;
// var inputs = form.getElementsByTagName("input");

// form.addEventListener("input", function () {
//   var filled = 0;
//   // Count the number of filled inputs
//   for (var i = 0; i < inputs.length; i++) {
//     if (inputs[i].value !== "") {
//       filled++;
//     }
//   }
//   // Update the progress bar
//   progressBar.value = (filled / inputs.length) * 100;
// });

// nextBtn.addEventListener("click", function () {
//   if (currentSection < totalSections) {
//     switch (currentSection) {
//       case 1:
//         section1.style.display = "none";
//         section2.style.display = "block";
//         break;
//       case 2:
//         section2.style.display = "none";
//         section3.style.display = "block";
//         break;
//       case 3:
//         section3.style.display = "none";
//         section4.style.display = "block";
//         nextBtn.innerHTML = "Submit";
//         break;
//     }
//     prevBtn.style.display = "block";
//     currentSection++;
//   } else {
//     // Submit the form
//   }
// });

// prev;

const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");

const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
