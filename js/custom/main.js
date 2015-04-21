var windowH = $(window).height();
var windowW = $(window).width();

function fullscreen(){
	$(".fullscreen").each(function(i){
	    var path = $(this);
	    path.css("height", windowH / 2); 
	});
}

function waypoints() {
	
}

$(document).ready(function(){
	fullscreen();

	$(".lazy").lazyload({
	    effect : "fadeIn",
	    threshold : 500
	});

	waypoints();

});