// ############################# EXPERIENCES PAGES VIDEO ################################# //

function reduceVideo() {
    var x = document.getElementById("background-video");
    var y = document.getElementById("videoContainer");
    
    if(window.scrollY > 10){
        if (window.innerWidth > 980){
            x.style.width = "15%";
            y.style.left = "calc(50% - 7.5%)";
        }  else {
            if(window.scrollY > 10){
                x.style.width = "50%";
            }
        }

            x.style.height = "500px";
            y.style.left = "calc(50% - 25%)";
            y.style.left = "calc(50% - 25%)";
            y.style.top = "calc(50vh - 250px)";
            y.style.position = "fixed";
            y.style.float = "center";
    }


    if (window.scrollY <= 10){
            x.style.width = "100%";
            x.style.height = "100%";
            y.style.left ="0";
            y.style.top = "0";
            x.style.position = "relative";
    }
}

window.addEventListener("scroll", () => {
        reduceVideo();
        console.log("it works");
})