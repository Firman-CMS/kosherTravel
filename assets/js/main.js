// $('.nav-backto-top').each(function(){
//     $(this).click(function(){
//         $('html,body').animate({ scrollTop: 0 }, 'slow');
//         return false;
//     });
// });
// $(document).ready(function(){

// 	$('a.nav-backto-top').click(function() {
// 	    $(window.opera ? 'html' : 'html, body').animate({
// 	        scrollTop: 0
// 	    }, 'slow');
// 	});

// });

$(document).ready(function(){

	$(function () {
		$('a.nav-backto-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});
