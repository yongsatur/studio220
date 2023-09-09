/*jslint node: true */

'use strict';

$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
	});
	$('.scrollup').click(function () {
		$("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

});

$('a[href^="#"').on('click', function () {

    var href = $(this).attr('href');

    $('html, body').animate({
        scrollTop: $(href).offset().top
    }, {
        duration: 500,
		easing: "linear"
	});

    return false;
});

new WOW().init();

$('#owl-carousel-feedback').owlCarousel({
    loop: true,
    items: 1,
    dots: true,
    autoHeight: true
});

$('#owl-carousel-gallery').owlCarousel({
    margin: 10,
    center: true,
    loop: true,
    dots: false,
    autoWidth: true,
    items: 5
});

$('#owl-carousel-gallery').on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY > 0) {
        $('#owl-carousel-gallery').trigger('next.owl');
    } else {
        $('#owl-carousel-gallery').trigger('prev.owl');
    }
    e.preventDefault();
});

$('#google_form').on('submit', function (e) {
	Swal.fire({
	  	text: 'Ваше сообщение было успешно отправлено!',
		padding: '2em',
		color: '#303030',
	  	confirmButtonColor: '#303030'
	});
	$("#google_form")[0].reset();
});