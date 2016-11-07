$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#mypage']").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;
	

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
  
  
 /*--------------------------------------------------------------- 
                  //swing effect  on mouse enter\\
-----------------------------------------------------------------*/
$.fn.extend({
    animateCss: function (animationName) {
		
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $(this).addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
    }
});

$("#footer .social .col-lg-12 li").mouseenter(function(){
		$("#footer .social .col-lg-12 li").animateCss("jello");
	})
$(".navbar  #signIn").mouseenter(function(){
		$(".navbar  #signIn").animateCss("jello");
	})	
	
/*-----------------------------------------------------------------
					text on products images
-------------------------------------------------------------------*/	
	$(".showcase").mouseenter(function(){
		$(this).find(".image-holder").addClass("animated flipOutX");
		
		$(this).find(".image-text").css("z-index","1").addClass("animated zoomIn");
		})
	
	$(".showcase").mouseleave(function(){
		$(this).find(".image-text").css("z-index","-1").removeClass("animated zoomIn");
	
		$(this).find(".image-holder").removeClass("animated flipOutX").addClass("animated flipInX");
		
		})
/// ------------------------------ removing some classes if window size is less then 768px--------------

$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});

	
  
});