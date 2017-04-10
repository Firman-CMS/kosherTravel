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

	$('.slideout-menu-toggle').on('click', function(event){
      event.preventDefault();
      // create menu variables
      var slideoutMenu = $('.slideout-menu');
      var slideoutMenuWidth = $('.slideout-menu').width();

      // toggle open class
      slideoutMenu.toggleClass("open");

      // slide menu
      if (slideoutMenu.hasClass("open")) {
        slideoutMenu.animate({
          left: "0px"
        });
        $(".overlay-body").show();
      } else {
        slideoutMenu.animate({
          left: -slideoutMenuWidth
        }, 500);
        $(".overlay-body").hide();
      }
    });

});
