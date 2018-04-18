$(function(){
	/* back to top */
	// fade in #back-top
	$(window).scroll(function(){
		if($(this).scrollTop() > 100){
			$('#back-top').fadeIn();
		}
		else{
			$('#back-top').fadeOut();
		}
	});
	 // scroll body to 0px on click
	 $('#back-top a').click(function(){
		 $('body,html').animate({ scrollTop: 0 }, 800); return false;
	 });

	 /* mobile menu */
	 $('#mobile-nav-anchor').click(function(){
	 	$('body').css('right', '16em');
	 	$('#nav').css('width', '16em');
	 	$('#dark-cover').css({'width': '100%', 'height':'100%'});
	 });
	 $('.close, #dark-cover').click(function(){
	 	$('body').css('right', '0em');
	 	$('#nav').css('width', '0em');
	 	$('#dark-cover').css({'width': '0', 'height':'0'});
	 });
	/* creates a toggle menu for child pages. allows user to see child pages in nav w/o selecting the parent
 	// toggle svg +/- button
 	$('.click').click(function(){
 		if($(this).is('.active')){
 			$(this).attr('class','click');
 			$(this).children('.click-svg').attr('xlink:href', '#plus-icon');
 		}
 		else{
 			$(this).attr('class', 'active click');
 			$(this).children('.click-svg').attr('xlink:href', '#minus-icon');
 		}
 		// toggle child menu
 		$(this).next().toggle();
 	});
	*/
 });
