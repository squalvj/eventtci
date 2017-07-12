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
	    autoplayDisableOnInteraction: true
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
		  useEasing : false, 
		  useGrouping : true, 
		  separator : ',', 
		  decimal : '.', 
		};
		var demo = new CountUp(ex, 0, 34, 0, 1.5, options);
		var demo2 = new CountUp(speak, 0, 11, 0, 1.5, options);
		demo.start();
		demo2.start();
	}

	particlesJS.load('particles-js', 'assets/js/particles.json', function() {
	 // console.log('callback - particles.js config loaded');
	});   


	// scrollspy
	$(".item-nav a[href^='#']").on('click', function(e) {
       // prevent default anchor click behavior
       e.preventDefault();

       // animate
       $('html, body').animate({
           scrollTop: $(this.hash).offset().top - 70
         }, 500, function(){
   
           // when done, add hash to url
           // (default click behaviour)
           window.location.hash = this.hash;
         });

    });

	$("#modal-proposal").iziModal({
		title: 'Request Proposal',
	    subtitle: '',
	    headerColor: '#88A0B9',
	    theme: '',  // light
	    appendTo: 'false', // or false
	    icon: null,
	    iconText: null,
	    iconColor: '',
	    rtl: false,
	    //width: "50%",
	    top: null,
	    bottom: null,
	    borderBottom: true,
	    padding: 0,
	    radius: 3,
	    zindex: 9999,
	    iframe: false,
	    iframeHeight: 400,
	    iframeURL: null,
	    focusInput: true,
	    group: '',
	    loop: false,
	    navigateCaption: true,
	    navigateArrows: true, // Boolean, 'closeToModal', 'closeScreenEdge'
	    history: false,
	    restoreDefaultContent: false,
	    autoOpen: 0, // Boolean, Number
	    bodyOverflow: false,
	    fullscreen: true,
	    openFullscreen: false,
	    closeOnEscape: true,
	    closeButton: true,
	    overlay: true,
	    overlayClose: true,
	    overlayColor: 'rgba(0, 0, 0, 0.4)',
	    timeout: false,
	    timeoutProgressbar: false,
	    pauseOnHover: false,
	    timeoutProgressbarColor: 'rgba(255,255,255,0.5)',
	    transitionIn: 'comingIn',
	    transitionOut: 'comingOut',
	    transitionInOverlay: 'fadeIn',
	    transitionOutOverlay: 'fadeOut',
	    onFullscreen: function(){},
	    onResize: function(){},
	    onOpening: function(){},
	    onOpened: function(){},
	    onClosing: function(){},
	    onClosed: function(){}
	});
	$(document).on('click', '.trigger-proposal', function (event) {
	    event.preventDefault();
	    $('#modal-proposal').iziModal('open');
	});
    
	$("#modal-user").iziModal({
		title: 'Pre Registration',
	    subtitle: '',
	    headerColor: '#88A0B9',
	    theme: '',  // light
	    appendTo: 'false', // or false
	    icon: null,
	    iconText: null,
	    iconColor: '',
	    rtl: false,
	    width: "700px",
	    top: null,
	    bottom: null,
	    borderBottom: true,
	    padding: 0,
	    radius: 3,
	    zindex: 9999,
	    iframe: false,
	    iframeHeight: 400,
	    iframeURL: null,
	    focusInput: true,
	    group: '',
	    loop: false,
	    navigateCaption: true,
	    navigateArrows: true, // Boolean, 'closeToModal', 'closeScreenEdge'
	    history: false,
	    restoreDefaultContent: false,
	    autoOpen: 0, // Boolean, Number
	    bodyOverflow: false,
	    fullscreen: true,
	    openFullscreen: false,
	    closeOnEscape: true,
	    closeButton: true,
	    overlay: true,
	    overlayClose: true,
	    overlayColor: 'rgba(0, 0, 0, 0.4)',
	    timeout: false,
	    timeoutProgressbar: false,
	    pauseOnHover: false,
	    timeoutProgressbarColor: 'rgba(255,255,255,0.5)',
	    transitionIn: 'comingIn',
	    transitionOut: 'comingOut',
	    transitionInOverlay: 'fadeIn',
	    transitionOutOverlay: 'fadeOut',
	    onFullscreen: function(){},
	    onResize: function(){},
	    onOpening: function(){},
	    onOpened: function(){},
	    onClosing: function(){},
	    onClosed: function(){}
	});
	$(document).on('click', '.trigger-user', function (event) {
	    event.preventDefault();
	    $('#modal-user').iziModal('open');
	});

    $('input[type=radio][name=proposal]').change(function() {
        if (this.value == 'other')
        	$(".other").removeClass('hide')
        else
        	$(".other").addClass('hide')
    });

    $(document).bind('change', function(e){
	    if( $(e.target).is(':invalid') ){
	        $(e.target).parent().addClass('has-error');
	    } else {
	        $(e.target).parent().removeClass('has-error');
	    }
	    
	    $('form#form-proposal #submit-proposal').click(function(event) { // <- goes here !
		    if ($(".other9").val().length <= 0 && $(".lainnya").is(':checked')){
		    	$(".other9").parent().addClass('has-error')
		        event.preventDefault();
		    }
		    else {
		    	$(".lainnya").val($(".other9").val());   	
		    }   
		});
	});

	$('[data-toggle="datepicker"]').datepicker({
		zIndex: "99999",
		autoHide: true,
		format: 'yyyy-mm-dd'
	});
	console.log("ASD")
});