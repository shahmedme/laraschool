$(document).ready(function() {
    var pathName = window.location.pathname,
    	fields = pathName.split("/");

    if(fields[1] == "") {
    	$('body').addClass('home');
    	$('.top-nav').addClass('d-lg-block');
    	$('hero-area').removeClass('d-none');
    }
    else {
    	$('body').addClass(fields[1]);
    }
})