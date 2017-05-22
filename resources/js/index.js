$(document).ready(() => { 

    $('.js--section--profile').waypoint(function(direction) {
        if(direction === 'down') {
            $('nav').addClass('sticky');
        } else {
            $('nav').removeClass('sticky');
        }
    })

    $.localScroll();

})