$(document).ready(() => { 

    $('.js--section--bio').waypoint(function(direction) {
        if(direction === 'down') {
            $('nav').addClass('sticky');
        } else {
            $('nav').removeClass('sticky');
        }
    }, {
        offset: '60px'
    })

    $.localScroll();

})