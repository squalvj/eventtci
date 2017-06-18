jQuery(document).ready(function($) {
	// $(window).on('scroll', function() {
	// 	console.log(this);
	//     if (Math.round($(window).scrollTop()) > 100) {
	//       $('#section1').addClass('scrolled');
	//     } else{
	//       $('#section1').removeClass('scrolled');
	//     }
 //  	});


 	var mySwiper = new Swiper ('.swiper-container', {
	    // Optional parameters
	    direction: 'horizontal',
	    loop: true,
	    speed: 700,
	    
	    // If we need pagination
	    pagination: '.swiper-pagination',
	    
	    // Navigation arrows
	    nextButton: '.swiper-button-next',
	    prevButton: '.swiper-button-prev',
	    
	    // And if we need scrollbar
	    scrollbar: '.swiper-scrollbar',
	    autoplay: 6000,
	    autoplayDisableOnInteraction: false
  	})        

	'use strict';

	// grabbing the class names from the data attributes
	var navBar = $('.navbar'),
	    data = navBar.data();

	// booleans used to tame the scroll event listening a little..
	var scrolling = false,
	    scrolledPast = false;

	// transition Into
	function switchInto() {
	  // update `scrolledPast` bool
	  scrolledPast = true;
	  // add/remove CSS classes
	  navBar.removeClass(data.startcolor);
	  navBar.removeClass(data.startsize);
	  navBar.addClass(data.intocolor);
	  navBar.addClass(data.intosize);
	  //console.log('into transition triggered!');
	};

	// transition Start
	function switchStart() {
	  // update `scrolledPast` bool
	  scrolledPast = false;
	  // add/remove CSS classes
	  navBar.addClass(data.startcolor);
	  navBar.addClass(data.startsize);
	  navBar.removeClass(data.intocolor);
	  navBar.removeClass(data.intosize);
	}

	// set `scrolling` to true when user scrolls
	$(window).scroll(function () {
	  return scrolling = true;
	});

	setInterval(function () {
	  // when `scrolling` becomes true...
	  if (scrolling) {
	    // set it back to false
	    scrolling = false;
	    // check scroll position
	    if ($(window).scrollTop() > 100) {
	      // user has scrolled > 100px from top since last check
	      if (!scrolledPast) {
	        switchInto();
	      }
	    } else {
	      // user has scrolled back <= 100px from top since last check
	      if (scrolledPast) {
	        switchStart();
	      }
	    }
	  }
	  // take a breath.. hold event listener from firing for 100ms
	}, 100);

	$('#section3').parallax({imageSrc: 'assets/img/p.png'});
	countUpStart();
	function countUpStart(){
		var ex = document.getElementById("exhibitCount");
		var speak = document.getElementById("speakerCount");
		var options = {
		  useEasing : true, 
		  useGrouping : true, 
		  separator : ',', 
		  decimal : '.', 
		};
		var demo = new CountUp(ex, 0, 35, 0, 5, options);
		var demo2 = new CountUp(speak, 0, 12, 0, 5, options);
		demo.start();
		demo2.start();
	}

});