/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
    playAudio();
}

/**
 * Scroll to top of page
 */
function scroll_to_top_page(callback) {
    if (typeof callback === 'undefined' || typeof callback !== 'function') {
        callback = function () {};
    }
    $('html, body').animate({scrollTop: 0}, 'slow', callback);
}

$(document).ready(function () {
    scrolling();

});

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