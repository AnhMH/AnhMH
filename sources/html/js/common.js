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
    hide_main_loader();
});

/**
 * Force hide main loader after 10s
 */
$(function () {
    setTimeout(function(){
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
    $('#main_loader').addClass('hidden');
}