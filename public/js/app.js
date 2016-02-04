$(document).ready(function() {
    // Scroll to top link.
    $('#top-button').on('click', function(event){
        $('html, body').animate({scrollTop: 0}, "medium");
        return false;
    });

    // On scroll show/hide button.
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#top-button').fadeIn();
        } else {
            $('#top-button').fadeOut();
        }
    });
});