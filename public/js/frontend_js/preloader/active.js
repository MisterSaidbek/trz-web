
//preloader icon on load
(function ($) {
    'use strict';

    var browserWindow = $(window);

    // :: 1.0 Preloader Active Code
    browserWindow.on('load', function () {
        $('.preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });

})(jQuery);

//video autoplay on load
$(window).on('load', function(){

    //Vide.js - video background
    $('#header_video').vide('assets/intro', {
        bgColor: '#64947b'
    });
});


//scrollUp
jQuery(($) => {
    $(window).scroll(function(){
        if ($(this).scrollTop() > 780) $('.to-up').fadeIn();
        else $('.to-up').fadeOut();    });
    $('.to-up').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 566);
        return false;
    });});
document.addEventListener('DOMContentLoaded', () => {
    let toTopBtn = document.querySelector('.to-up');
    window.onscroll = function () {
        if (window.pageYOffset > 580) {
            toTopBtn.style.display = 'block'
        }
        else {
            toTopBtn.style.display = 'none'
        }    }

    toTopBtn.addEventListener('click', function () {
        window.scrollBy({
            top: -document.documentElement.scrollHeight,
            behavior: 'smooth'
        });    });});
