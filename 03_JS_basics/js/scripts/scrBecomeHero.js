// становимся героем
// забираем кнопку и поле ввода
const becomeHeroButton = document.getElementById("become-hero-button");
const nameInput = document.getElementById("hero-name-input");

// ловим клик и введенные данные
becomeHeroButton.addEventListener("click", () => {
  const newHeroName = nameInput.value;

  const blocks = document.querySelectorAll(".block");
  blocks.forEach((block) => {
    const elements = block.querySelectorAll("h2, .block-full-content, .block-content p");
    elements.forEach((element) => {
      element.textContent = element.textContent.replace(/Максим/g, newHeroName);
    });
  });
});