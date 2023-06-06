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

// Становимся героем
const becomeHeroButton = document.getElementById("become-hero-button");
const nameInput = document.getElementById("hero-name-input");

becomeHeroButton.addEventListener("click", () => {
  const newHeroName = nameInput.value; 
  
  const blocks = document.querySelectorAll(".block");
  blocks.forEach((block) => {

    const title = block.querySelector("h2");
    title.textContent = title.textContent.replace(/Максим/g, newHeroName);

    const fullContent = block.querySelector(".block-full-content");
    const fullContentText = fullContent.textContent;
    fullContent.textContent = fullContentText.replace(/Максим/g, newHeroName);

    const shortContent = block.querySelector(".block-content p");
    const shortContentText = shortContent.textContent;
    shortContent.textContent = shortContentText.replace(/Максим/g, newHeroName);
  });
});