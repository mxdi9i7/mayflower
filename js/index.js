$('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:4
        }
    },
    navText: ['<i class="material-icons">arrow_back</i>', '<i class="material-icons">arrow_forward</i>'],
    nav:true,
    dots: false,
})

$('.carousel').carousel()

var navTrigger = $('#navTrigger').val();
if (navTrigger == "home") {
    $('.links a').removeClass('active');
    $('#homeNav').addClass('active')
}
if (navTrigger == "about") {
    $('.links a').removeClass('active');
    $('#aboutNav').addClass('active')
}
if (navTrigger == "project") {
    $('.links a').removeClass('active');
    $('#projectNav').addClass('active')
}