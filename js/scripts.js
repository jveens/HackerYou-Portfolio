$(function() {
	slideout();
	// stacking();
	slideOverlay();

});


var showNav = function() {
	var navWrapper = $('.navWrapper');
	var isVisible = $('.navWrapper').is(':visible');
	var hamLines = $('.hamLines');
	var li = $('.hamLines li')
	var li1 = $('.line1');
	var li2 = $('.line2');
	var li3 = $('.line3');

	setTimeout(function () {
		if(isVisible) {
			navWrapper.fadeOut();
			$(hamLines).css('background-color', 'black');
			$(li).css('background-color', 'white');

		} else {
			navWrapper.fadeIn();	
			$(hamLines).css('background-color', 'transparent');
			$(li2).css('background-color', 'black');
		}
	},400);

	// var changeBurger = function() {
	// 		if(isVisible) {
	// 			
	// 			$(li2).css('background-color', 'white');
	// 					} else {
	// 			$(hamLines).css('background-color', 'transparent');
	// 			$(li1, li3).css('background-color', 'transparent');
				
	// 		}
	// 	};
}

// Make the nav slideout when the hamburger is clicked
var slideout = function(){
	$('.hamburger').on('click', function(){
		$('nav').toggleClass('slideout');
		showNav();
	});
	$('nav li a').on('click', function(){
		$('nav').toggleClass('slideout');
		showNav();
	});
	$('.small').on('click', function(){
		$('nav').toggleClass('slideout');
		showNav();
	});
};

var slideOverlay = function() {
	$('.seeItLive').on('mouseover', function(){
		$(this).parent().next('.workOverlay').addClass('hovered');
		$('.workBg').addClass('hoveredBg');
	});
	$('.seeItLive').on('mouseout', function(){
		$(this).parent().next('.workOverlay').removeClass('hovered');
		$('.workBg').removeClass('hoveredBg');
	});
};

// var stacking = function() {
//     // Set up vars
//     var _window = $(window),
//         panels = $('.panel'),
//         panelsY = [];

//     // Cache position of each panel
//     $.each(panels, function(i, el) {
//         panelsY.push(panels.eq(i).offset().top);
//     });

//     // Bind our function to window scroll
//     _window.bind('scroll', function() {
//         updateWindow();
//     });

//     // Update the window
//     function updateWindow() {
//         var y = _window.scrollTop();

//         // Loop through our panel positions
//         for (i = 0, l = panels.length; i < l; i++) {
//             /* 
//                 Firstly, we break if we're checking our last panel,
//                 otherwise we compare if the y position is in between
//                 two panels
//             */
//             if ((i === l - 1) || (y >= panelsY[i] && y <= panelsY[i+1])) {
//                 break;
//             }
//         }

//         // Update classes
//         panels.not(':eq(' + i + ')').removeClass('panel-fixed');
//         panels.eq(i).addClass('panel-fixed');
//     }

// };