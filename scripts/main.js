
$(document).ready(function() {
	
  var headerHeight = $('header').outerHeight(); // Target your header navigation here
	
  $('#main-nav li a').click(function(e) {
  	
  	var targetHref   = $(this).attr('href');
	  
	$('html, body').animate({
		scrollTop: $(targetHref).offset().top - headerHeight // Add it to the calculation here
	}, 1000);
    
    e.preventDefault();
  });
});




jQuery(function($) {
  
  // Function which adds the 'animated' class to any '.animatable' in view
  var doAnimations = function() {
    
    // Calc current offset and get all animatables
    var offset = $(window).scrollTop() + $(window).height(),
      $animatables = $('.animatable');
    
    // Unbind scroll handler if we have no animatables
    if ($animatables.length == 0) {
    $(window).off('scroll', doAnimations);
    }
    
    // Check all animatables and animate them if necessary
      $animatables.each(function(i) {
     var $animatable = $(this);
        if (($animatable.offset().top + $animatable.height() - 20) < offset) {
      $animatable.removeClass('animatable').addClass('animated');
        }
    });
  
    };
  
  // Hook doAnimations on scroll, and trigger a scroll
    $(window).on('scroll', doAnimations);
  $(window).trigger('scroll');
  
  });


  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/588899b946ba805858264a09/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	$(".burger").click(function(){
	$(".navbar-text").toggleClass("active");
  } );
  


  $(function(){
	
    var $window = $(window);		//Window object
    
    var scrollTime = 0.6;			//Scroll time
    var scrollDistance = 170;		//Distance. Use smaller value for shorter scroll and greater value for longer scroll
      
    $window.on("mousewheel DOMMouseScroll", function(event){
      
      event.preventDefault();	
                      
      var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
      var scrollTop = $window.scrollTop();
      var finalScroll = scrollTop - parseInt(delta*scrollDistance);
        
      TweenMax.to($window, scrollTime, {
        scrollTo : { y: finalScroll, autoKill:true },
          ease: Power1.easeOut,	//For more easing functions see https://api.greensock.com/js/com/greensock/easing/package-detail.html
          autoKill: true,
          overwrite: 5							
        });
            
    });
    
  });