$(document).ready(function() {

//Drop down menu
$('#s_drop').click(function(){
	$('div',this).slideToggle();
});
$('#s_drop ul a').click(function(){
	$('#s_drop div').slideUp();
});

$('#mobile_m').click(function(){
	$('.menu').slideToggle(400);
})

//Contact form smooth scroll
var contactMe = $('#FSContact1').offset().top;
var pageTop = $('#intro').offset().top;

$('#contact').click(function(){
		$('html, body').animate({scrollTop:contactMe}, 'slow');
		return false;
});
$('#top_side').click(function(){
	$('html, body').animate({scrollTop:pageTop}, 'slow');
	return false;
});
  
//Floating Nav Bar
function scrollNav(){
	var head=$('#header');
	var scrolled =false;
	var windowScroll = $(window).scrollTop();
	if (windowScroll > 200){
		head.addClass('fixed').stop(true,true).animate({top:'0px'});
		$('#wrapper').addClass('nofloat');
		$('#top_side').fadeIn("slow");
		scrolled=true;
	}
	
	if(windowScroll < 200){
		head.stop(true,true).animate({top:'-51px'},100);	
		setTimeout(function(){
		head.removeClass('fixed');
		},200);
		$('#wrapper').removeClass('nofloat');
		$('#top_side').hide();
	scrolled=false;
	}
};

$(window).scroll(function(){
	scrollNav();
});

$('#quickies li img').click(function(){
	var parentHeight = $(this).parent().height();
	var container = $(this).parent();
	if(parentHeight < 300){
	$(container).stop(true,true).animate({height:'300px'})
	$(container).find('*').show();
		console.log($(this).parent().height());
	}else{
	console.log('yes!')
	$(container).stop(true,true).animate({height:'50px'});
	$(container).find('ul:nth-child(2), a, p').hide();
	}	

});

	
});