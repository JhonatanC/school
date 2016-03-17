$(function(){

    $('.toggle-nav').click(function(e){
        $('nav .nav-mobile').addClass('style-mobile').slideToggle('slow');
        e.preventDefault();
    });

});
