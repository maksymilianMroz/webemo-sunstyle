$(document).ready(function(){
// -------------------------- //

$("#nav-button").click(function() {
	$(".flexbox-nav-wrapper").addClass("active");
	$("body").addClass("no-scroll");
});

$("#nav-button-close").click(function() {
	$(".flexbox-nav-wrapper").removeClass("active");
	$("body").removeClass("no-scroll");
});

// -------------------------- //
});