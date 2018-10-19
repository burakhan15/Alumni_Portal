$(document).ready(function(){
	$(".menuToggle").click(function(){
		if ( $("button").hasClass("m-open") ) {
			$(".menu").slideUp(150);
			$(".menuToggle").removeClass("m-open");
			$(".menuToggle i").removeClass("fa-close").addClass("fa-navicon");
		}else{
			$(".menu").slideDown(150);
			$(".menuToggle").addClass("m-open");
			$(".menuToggle i").removeClass("fa-navicon").addClass("fa-close");
		}
	});
});