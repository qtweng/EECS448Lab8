/*
scripts for password.html (password validator)
 */
let password = document.getElementById("password")
    , verify = document.getElementById("verify");

//checks for equivalent values and if length is too small then alerts
function validatePassword(){
    if(password.value !== verify.value) {
        window.alert("Passwords Don't Match");
    } else if (password.value.length < 8){
        window.alert('Passwords needs to be at least 8 characters long');
    }
}

/*
scripts for slideshow
 */
let slideIndex = 0;
function showSlides(index) {
    let slides = document.getElementsByClassName("slides");
    if (slideIndex >= slides.length) {slideIndex = 0}
    if (slideIndex < 0) {slideIndex = slides.length - 1}
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex].style.display = "block";
}
function prevSlide(){
    slideIndex--;
    showSlides(slideIndex);
}
function nextSlide(){
    slideIndex++;
    showSlides(slideIndex);
}
/*
script for css manipulation
 */
function manipulate(){
    let paragraph = document.getElementById("css-manipulation");
    let borderRed = document.getElementById("border-red");
    let borderGreen = document.getElementById("border-green");
    let borderBlue = document.getElementById("border-blue");
    let borderWidth = document.getElementById("border-width");
    let backgroundRed = document.getElementById("background-red");
    let backgroundGreen = document.getElementById("background-green");
    let backgroundBlue = document.getElementById("background-blue");
    let backgroundWidth = document.getElementById("background-width");
    paragraph.style.borderColor = "rgb(" + borderRed.value + ", " + borderGreen.value + ", " + borderBlue.value + ")";
    paragraph.style.borderWidth = borderWidth.value + "px";
    paragraph.style.backgroundColor = "rgb(" + backgroundRed.value + ", " + backgroundGreen.value + ", " + backgroundBlue.value + ")";
    paragraph.style.backgroundWidth = backgroundWidth.value + "px";
}