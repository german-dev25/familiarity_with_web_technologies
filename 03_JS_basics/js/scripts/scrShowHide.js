// Скрыть-показать текст
const expandButtons = document.querySelectorAll(".expand-button");

expandButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const block = button.closest(".block");
    const fullContent = block.querySelector(".block-full-content");

    const isExpanded = fullContent.classList.contains("show-full-content");

    if (isExpanded) {
      fullContent.classList.remove("show-full-content");
      button.textContent = "Показать полностью";
    } else {
      fullContent.classList.add("show-full-content");
      button.textContent = "Скрыть полностью";
    }
  });
});