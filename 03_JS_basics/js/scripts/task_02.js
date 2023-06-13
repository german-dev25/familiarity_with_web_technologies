// генерация случайного числа 
function getRandomNumber(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

// генерация массива
function generateRandomArray() {
    var arr = [];
    // случайная длина
    var length = getRandomNumber(1, 10);

    for (var i = 0; i < length; i++) {
        // случайное число
        var randomNumber = getRandomNumber(1, 100);
        arr.push(randomNumber);
    }
    return arr;
}

var randomArray = generateRandomArray();
var reverseArray = randomArray.slice().sort (function(a, b) {
    return b - a}
    )
console.log(randomArray);
console.log(reverseArray);