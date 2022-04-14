// ##################################### KONAMI CODE ##################################### //

/*
// create a function for konami code
const konamiCodeFunction = () => {
    // create an array of keycodes for konami code
    let konamiCode = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];
    // create a variable for the keycodes
    let konamiCodePosition = 0;
    // create a variable for the keycode
    let konamiCodeEntered = [];
    // create a variable for the keycode entered
    // add an event listener for keydown
    document.addEventListener('keydown', function (event) {
        // add the keycode to the konami code entered
        konamiCodeEntered.push(event.keyCode);
        // if the keycode is not the same as the konami code
        if (konamiCode[konamiCodePosition] !== konamiCodeEntered[konamiCodePosition]) {
            // reset the konami code entered
            konamiCodeEntered = [];
        }
        // if the keycode is the same as the konami code
        else {
            // increase the konami code position
            konamiCodePosition++;
        }
        // if the konami code position is the same as the length of the konami code
        if (konamiCodePosition === konamiCode.length) {
            // run the konami code function
            konamiCodeFunction();
        }
    });
}
*/

document.addEventListener('keydown', keyHandler, false);

let keyHandler = (event) => {
	console.log(event.key);
};

var pattern = ['ArrowUp',
    'ArrowUp',
    'ArrowDown',
    'ArrowDown',
    'ArrowLeft', 
    'ArrowRight',
    'ArrowLeft',
    'ArrowRight', 
    'b',
    'a'
];