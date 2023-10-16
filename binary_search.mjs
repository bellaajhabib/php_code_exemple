const tableau = new Array(100).fill().map((x, i) => i + 1);
const numberToGuess = Math.floor(Math.random() * 100);
let numberOfTries = 0;

function binarySearch(tableau, numberToGuess) {
    let min = 0;
    let max = tableau.length - 1;

    console.log('numberToGuess ' +numberToGuess);
    while (min <= max) {
        const mind = Math.floor((min + max) / 2)
        const guess = tableau[mind];

        numberOfTries++;
        console.log('guess ' +guess,'numberToGuess '+numberToGuess);
        console.log('max ' +max,'min '+min,'mind ' +mind);
        if (guess === numberToGuess) {
            return mind;
        } else if (guess > numberToGuess) {
            max = mind - 1;
        } else {
            min = mind + 1;

        }
    }
    return null;
}
const result = binarySearch(tableau, numberToGuess);
console.log("result " + result);
console.log("numberOfTries " + numberOfTries);

