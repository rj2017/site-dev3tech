<script>
var slideIndex = 0;
showSlides();


function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("banner");
    if (n > x.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }

    x[slideIndex-1].style.display = "block";
}


function showSlides() {
    var i;
    var slides = document.getElementsByClassName("banner");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" black", "");
    }
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 8000); // Change image every 2 seconds
}
</script>