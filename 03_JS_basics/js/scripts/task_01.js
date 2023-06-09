// Любимый фильм
export function askMovie() {
  const correctFavoriteMovies = ["гарри поттер", "пираты карибского моря", "шерлок холмс"];

  while (true) {
    var userTryToGuess = prompt("Угадайте мой любимый фильм:");
    
    if (userTryToGuess === null) {
      return;
    }
    
    userTryToGuess = userTryToGuess.toLowerCase().trim();

    if (correctFavoriteMovies.includes(userTryToGuess)) {
      var result = capitalizeFirstLetters(userTryToGuess)
      alert("Да, мой любимый фильм: " + result);
      return;
    }
    
    alert("Попробуйте ещё раз");
  }
}

function capitalizeFirstLetters(str) {
  var words = str.split(' ');
  // 
  var capitalizedWords = words.map(function(word) {
    return word.charAt(0).toUpperCase() + word.slice(1);
  });

  return capitalizedWords.join(' ');
}