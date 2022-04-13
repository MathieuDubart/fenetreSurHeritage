// ############################# EXPERIENCES PAGES VIDEO ################################# //

function reduceVideo() {
    var x = document.getElementsByClassName("background-video");
    var y = document.getElementsByClassName("videoContainer");
    
    if(window.scrollY > 10){
        if (window.innerWidth > 980){
            x[0].style.width = "15%";
            y[0].style.left = "calc(50% - 7.5%)";
            x[0].style.height = "75%";
            y[0].style.top = "calc(50vh - 37.5%)";
        }  else {
            if(window.scrollY > 10){
                x[0].style.width = "50%";
                y[0].style.left = "calc(50% - 25%)";
                x[0].style.height = "500px";
                y[0].style.top = "calc(50vh - 250px)";
            }
        }
        y[0].style.position = "fixed";
        y[0].style.float = "center";
    }


    if (window.scrollY <= 10){
        x[0].style.width = "100%";
        x[0].style.height = "100%";
        y[0].style.left ="0";
        y[0].style.top = "0";
        x[0].style.position = "relative";
    }
}

window.addEventListener("scroll", () => {
        reduceVideo();
        console.log("it works");
})