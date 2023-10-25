
$(document).ready(function() {

    // About: **show or hide message**
    $('.message').hide();
    $('.more').click(function() {
        $('.message').slideToggle();
        if ($(this).text() === 'Learn more') {
            $(this).text('Show less');
        } else {
            $(this).text('Learn more');
        }
    });
    $('.fa-heart').click(function () {
        $(this).toggleClass('fa-solid');
    });


    // Modal
    $('.modal-dialog').hide();
    $('.coffe-icon').click(function () {
        $('.coffe-modal').fadeIn()
    });
    $('.close').click(function () {
        $('.modal-dialog').fadeOut()
    });
    $('.ice-cream-icon').click(function () {
        $('.ice-cream-modal').fadeIn()
    });

});






