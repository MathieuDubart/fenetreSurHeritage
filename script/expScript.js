// ############################# EXPERIENCES PAGES VIDEO ################################# //

function reduceVideo() {
    var x = document.getElementsByClassName("background-video")[0];
    var y = document.getElementsByClassName("videoContainer")[0];
    var logo = document.getElementsByClassName("logoToHomepage")[0];


    // PENSER A FAIRE QUERY SLEECTO
    if(window.scrollY > 10){
        if (window.innerWidth > 980){
            x.style.width = "15%";
            y.style.left = "calc(50% - 7.5%)";
            x.style.height = "75%";
            y.style.top = "calc(50vh - 37.5%)";
            logo.style.display = "block";
        }  else {
            if(window.scrollY > 10){
                x.style.width = "50%";
                y.style.left = "calc(50% - 25%)";
                x.style.height = "500px";
                y.style.top = "calc(50vh - 250px)";
                logo.style.display = "block";
            }
        }
        y.style.position = "fixed";
        y.style.float = "center";
    }


    if (window.scrollY <= 10){
        x.style.width = "100%";
        x.style.height = "100%";
        y.style.left ="0";
        y.style.top = "0";
        x.style.position = "relative";
        logo.style.display = "none";
    }
}

window.addEventListener("scroll", () => {
        reduceVideo();
        console.log("it works");
})