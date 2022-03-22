$(document).ready(function () {
    // owl carousel
    $('.owl-carousel').owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        loop: true,
        margin: 50,
        responsive:{
            0:{
                items:3
            },
            600:{
                items:4
            },
            1000:{
                items:5
            }
        }
    });

    // toggle heart icon
    $("h5 i").click(function () {
        $(this).toggleClass("bi-heart").toggleClass("bi-heart-fill red");
    });
});