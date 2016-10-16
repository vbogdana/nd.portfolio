/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Wait for window load
$(window).load(function() {
        $(".se-pre-con").fadeIn();
        setTimeout(toggleLoader, 800, false);
});

function toggleLoader(show) {
     if(show == true) {
        $(".se-pre-con").fadeIn();
        $(".content").fadeOut();
     }
     else {
        $(".content").fadeIn();
        $(".se-pre-con").fadeOut();
     }
}

$(function() {
    $('.logo-link').hover(function() {
        $('.logo-enter').fadeIn();
    }, function() {
        // on mouseout, reset the background colour
        $('.logo-enter').fadeOut();
    });
});

function loadHome() {
    $(".content").fadeOut();
}