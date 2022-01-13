var burger = document.querySelector('#menutoggler');
        var rightnav = document.querySelector('.rightnav');
        var leftnav = document.querySelector('.leftnav');
        burger.addEventListener("click", () => {
            rightnav.classList.toggle('rightnav_resp');
            leftnav.classList.toggle('leftnav_resp');
        });

// Instantiate the Bootstrap 
var myCarousel = document.querySelector('#carouselTestimonial')
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 2000,
  wrap: true
}) 
// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
$('#carouselTestimonial .carousel-item').each(function(){
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    if (next.next().length>0) {
        next.next().children(':first-child').clone().appendTo($(this));
    } else {
        $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
    }
});

function showMoreOrLess(id) {
    var moreText = document.getElementById("id-more-information" + id);
    var btnText = document.getElementById("readMore" + id);

    if (btnText.innerHTML === "SHOW LESS") {
        btnText.innerHTML = "SHOW MORE"; 
        moreText.style.display = "none";
    } else {
        btnText.innerHTML = "SHOW LESS"; 
        moreText.style.display = "inline";
    }
}