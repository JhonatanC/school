$(function(){
    // #code
    $('.toggle-nav').click(function(e){
        $('nav .nav-mobile')
            .toggleClass('style-mobile');
            $('.style-mobile').animate({
                top : "51"
            });
        e.preventDefault();
    });
});

/*$( "#clickme" ).click(function() {
    $( "#book" ).animate({
        opacity: 0.25,
        left: "+=50",
        height: "toggle"
    }, 5000, function() {
        // Animation complete.
    });
});*/
