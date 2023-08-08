$(window).on('scroll',function(){ 
    var nav = $('#navArea');
    var top = 150;
    if ($(window).scrollTop() >= top) {

        nav.addClass('fixed');

    } else {
        nav.removeClass('fixed');
    }
	
});