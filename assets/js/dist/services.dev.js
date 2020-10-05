"use strict";

window.addEventListener("DOMContentLoaded", function () {
  var container = document.querySelector(".services");
  if (!container) return;
  var box = container.querySelector("article>ul>li");
  var pantonePalette = ["rgb(28, 129, 172)", "rgb(109, 93, 149)", "rgb(250, 177, 71)", "rgb(213, 66, 99)", "rgb(241, 122, 54)", "rgb(181, 109, 162)", "rgb(209, 179, 93)", "rgb(196, 145, 108)"];

  var randomColor = function randomColor() {
    var random = function random() {
      return Math.floor(Math.random() * 255);
    };

    return "rgb(".concat(random(), ", ").concat(random(), ", ").concat(random(), ")");
  };

  var randomPantone = function randomPantone() {
    return pantonePalette[Math.floor(Math.random() * pantonePalette.length)];
  };

  box.onscroll = function (e) {
    console.log(e);
  }; // cells.forEach((cell, i) => {
  //   gsap.set(cell, {
  //     backgroundColor: pantonePalette[i] || randomColor(),
  //   });
  // });

});