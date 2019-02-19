
function hamburguerToggle() {

    var x = document.getElementById("hamburger-menu");

    if (x.className === "navigation menu") {
        x.className += " responsive";
    } else {
        x.className = "navigation menu";
    }

}

function carousel() {
    var i;
    var x = document.getElementsByClassName("text-slide-item");

    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }

    slideIndex++;

    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 10000); 
}