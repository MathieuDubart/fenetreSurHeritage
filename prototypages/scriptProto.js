import interact from 'interactjs'

// -------------- SCRIPT MAP -------------- //

let viewMap = document.getElementById("viewMap");
let heroContainer = document.getElementById("heroContainer");
let startButton = document.getElementById("startButton");

startButton.addEventListener("click", ()=>{
    viewMap.style.display = "none";
    heroContainer.style.display = "flex";
    startButton.style.display = "none";
    console.log("it works");
})

// -------------- DRAG AND DROP -------------- //

