/*=============== All Slick Injecting Script Will Be Following ===============*/


/*=============== Slick Injecting Script For Hero Banner Section ===============*/
$(document).ready(function () {
    $('.banner').slick({
        accessibility: true,
        arrows: false,
        dots: true,
        centerMode: true,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 5000,
        fade: true,
        infinite: true
    });
});

/*=============== Slick Injecting Script For Our Partner section ===============*/
// $(document).ready(function () {
//     $('.partner-list').slick({
//         accessibility: true,
//         arrows: false,
//         dots: false,
//         centerMode: true,
//         slidesToShow: 3,
//         slidesToScroll: 2,
//         autoplay: true,
//         autoplaySpeed: 5000,
//         fade: false,
//         infinite: true
//     });
// });


/*=============== Slick Injecting Script For Testimonials Section ===============*/
$(document).ready(function () {
    $('.testimonial-card').slick({
        accessibility: true,
        arrows: true,
        dots: false,
        centerMode: true,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 5000,
        fade: true,
        infinite: true
    });
});