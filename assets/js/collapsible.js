window.addEventListener("DOMContentLoaded", () => {
  const collapsibles = document.querySelectorAll(".collapsible");
  collapsibles.forEach((e) => {
    e.addEventListener("click", (e) => {
      const question = e.target;
      if (!question.firstElementChild) return;
      const answer = question.firstElementChild.firstElementChild;
      question.classList.toggle("open");
      if (answer.style.maxHeight) {
        answer.style.maxHeight = null;
      } else {
        answer.style.maxHeight =
          answer.scrollHeight < "200" ? answer.scrollHeight + "px" : "200px";
      }
    });
  });
});
