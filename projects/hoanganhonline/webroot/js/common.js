/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var is_mobile = isMobile();

/**
 * Page loaded event
 */
$(document).ready(function () {
    scrolling();
    if (is_mobile) {
        $('.wow').attr('data-wow-delay', '0.3s');
    }
    
    var win = $(window);
    win.on("scroll", function () {
        var wScrollTop  = $(window).scrollTop();  
        
        if (wScrollTop > 150) {
            $("#header").addClass("shrink");
        } else {
            $("#header").removeClass("shrink");
        }
    });
});

/**
 * Page loaded event
 */
$(window).on('load', function () {
    // Hide main loader when page loaded
    setTimeout(function () {
        hide_main_loader();
    }, 2000);
});

/**
 * Force hide main loader after 10s
 */
$(function () {
    setTimeout(function () {
        hide_main_loader();
    }, 10000);
});

/**
 * Hide main loader
 */
function hide_main_loader() {
    if (!$('#container').hasClass('hidden')) {
        return false;
    }

    $('#container').removeClass('hidden');
    $('#main_loader .main_loader_img, #main_loader .loader').addClass('hidden');
    $('#main_loader .bg_left').css({left:'-100%'});
    $('#main_loader .bg_right').css({right:'-100%'});
    setTimeout(function () {
        $('#main_loader').addClass('hidden');
    }, 2000);
    
//    playAudio();
    
    // WOW animation
    initWow();
}

/**
 * INit WOW animation
 */
var initWow = function () {
    var timeout = 10;
    
    setTimeout(function () {
        fixAnimationMobile();
        
        wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: true
        });
        wow.init();
    }, timeout);
};

/**
 * Fix animation for Mobile
 */
var fixAnimationMobile = function () {
    // Fix time delay for mobile
    if (getInnerWidth(true) <= 750) {
        $('[data-wow-delay-mobile]').each(function () {
            $(this).attr('data-wow-delay', $(this).attr('data-wow-delay-mobile'));
        });
    }
    
    /*if (is_mobile || getInnerWidth(true) <= 750) {
        $('.fadeInUp').each(function () {
            $(this).removeClass('fadeInUp').addClass('fadeInUpMobile');
        });
    } else {
        $('.fadeInUpMobile').each(function () {
            $(this).removeClass('fadeInUpMobile').addClass('fadeInUp');
        });
    }*/

    // AnhMH 2018-01-03 Fix for IE
    /*if (typeof wow !== 'undefined' && wow) {
        wow.resetStyle();
    }*/
};

/**
 * Scroll to top of page
 */
function scroll_to_top_page(callback) {
    if (typeof callback === 'undefined' || typeof callback !== 'function') {
        callback = function () {};
    }
    $('html, body').animate({scrollTop: 0}, 'slow', callback);
}

// Add smooth scrolling to all links in navbar + footer link
function scrolling() {
    $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {

            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
}

// Play audio
function playAudio(pause) {
    if (typeof pause === 'undefined') {
        pause = false;
    }
    var x = document.getElementById("bg_audio");
    if (pause) {
        x.pause();
    } else {
        x.play();
    }
}