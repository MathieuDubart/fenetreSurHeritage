// ##################################### KONAMI CODE ##################################### //

/* ########################################### LOADING PAGE #####################################*/

window.onload = function() {
    document.body.classList.remove('stop-scrolling');
    document.querySelector(".loadingPage").style.display = "none";
}
/* ########################################### CHANGE SVG COLOR #####################################*/

let bugermenu = document.getElementById("burgermenuImg");
console.log(burgermenu);
let bool = true;

bugermenu.addEventListener("click", function() {
    if (bool == true) {
        document.getElementById("menuContainer").style.display = "flex";
        document.getElementById("menuContainer").style.overflowY = "hidden";
        bool = false;
    } else {
        document.getElementById("menuContainer").style.display = "none";
        document.getElementById("menuContainer").style.overflowY = "scroll";
        bool = true;
    }
});


/* ########################################### KONAMI #####################################*/

// document.addEventListener('keydown', keyHandler, false);

// let pattern = ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'b', 'a'];
// let current = 0;

// let keyHandler = (event) => {
// 	console.log(event.key);

//     // Si le patterne n'est pas respecté, le code se reset
// 	if (pattern.indexOf(event.key) < 0 || event.key !== pattern[current]) {
// 		current = 0;
// 		return;
// 	}

// 	current++;

// 	// SI le code est complet, afficher et reset
// 	if (pattern.length === current) {
// 		current = 0;
// 		window.alert('Hadouken');
// 	}
// };
