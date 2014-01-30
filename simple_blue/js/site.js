$(function (){

	//Nav
	var page = window.location.href;
	
	//Page indicator
 	if(page !== 'http://localhost/wordpress/'){
		$('nav a[href$="'+ page + '"]').addClass('active');
	};
	
	//Link Highlighter
	$('#right a, #l-foot a, #c-foot a').hover(
	function() {
		$(this).stop().animate({backgroundColor:"#000",color:"#fff"}, 300);
	},
	function() {
		$(this).stop().animate({backgroundColor:"#fff",color:"#237bff"}, 300);
	});
	
	$('nav a').hover(function (){
	$(this)
	.toggleClass('active',100);
	return false;
	});
	
	//Mobile Nav DropDown
	$('#mNav ul').click(function() {
		$('#mNav ul ul').slideToggle('fast');
	});
	
	
	});