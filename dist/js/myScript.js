
$(document).ready(function() {

    $("nav ul a").click(function () {
        $("nav ul a").css("color", "aliceblue");
        $("nav ul a").css("border-bottom", "none");
        $("nav ul a").css("padding-bottom", "none");
        $(this).css("color", "peachpuff");
        $(this).css("border-bottom", ".1rem solid peachpuff");
        $(this).css("padding-bottom", ".5rem");
    })

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






