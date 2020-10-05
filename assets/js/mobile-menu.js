window.addEventListener("DOMContentLoaded", () => {
  const mobileMenuContainer = document.querySelector(".mobile-menu-container");
  const menuIcon = document.querySelector("#menu-icon");
  const timeline = gsap.timeline();

  gsap.set(".mobile-menu-container", {
    x: "100%",
  });

  gsap.set(".mobile-menu-wrapper", {
    visibility: "hidden",
  });

  menuIcon.onclick = (e) => {
    mobileMenuContainer.classList.toggle("open");
    if (mobileMenuContainer.classList.contains("open")) {
      timeline.set("body", {
        overflow: "hidden",
      });
      timeline.set(".mobile-menu-wrapper", {
        visibility: "visible",
      });
      timeline.set(".container", {
        "touch-action": "none",
      });
      timeline.to("#menu-icon", {
        rotate: "-180deg",
      });
      timeline.to(
        ".mobile-menu-container",
        {
          x: 0,
        },
        "<"
      );
    } else {
      timeline.set(".container", {
        "touch-action": "auto",
      });
      timeline.to(".mobile-menu-container", {
        x: "100%",
      });
      timeline.to(
        "#menu-icon",
        {
          rotate: 0,
        },
        "<"
      );
      timeline.set(".mobile-menu-wrapper", {
        visibility: "hidden",
      });
      timeline.set("body", {
        overflow: "visible",
      });
    }
  };
});
