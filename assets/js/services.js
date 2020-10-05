window.addEventListener("DOMContentLoaded", () => {
  const container = document.querySelector(".services");
  if (!container) return;

  const box = container.querySelector("article>ul");
  const items = box.querySelectorAll("article>ul>li");

  const pantonePalette = [
    "rgb(181, 109, 162)",
    "rgb(250, 177, 71)",
    "rgb(28, 129, 172)",
    "rgb(109, 93, 149)",
    "rgb(213, 66, 99)",
    "rgb(241, 122, 54)",
    "rgb(209, 179, 93)",
    "rgb(196, 145, 108)",
  ];

  let randomColor = () => {
    let random = () => Math.floor(Math.random() * 255);
    return `rgb(${random()}, ${random()}, ${random()})`;
  };

  let randomPantone = () => {
    return pantonePalette[Math.floor(Math.random() * pantonePalette.length)];
  };

  gsap.set(".header-wrapper", {
    background: "none",
  });

  let tl1 = gsap.timeline();

  let tl2 = gsap.timeline({ paused: true });

  items.forEach((i, index) => {
    console.log(index, i);
    tl2.to("body", {
      background: pantonePalette[index],
    });
  });

  box.onscroll = (e) => {
    tl2.progress(box.scrollLeft / box.clientWidth / (items.length - 1));
  };
});
