jQuery(function() {
	slideout();
});

// Make the nav slideout when the hamburger is clicked
var slideout = function(){
	jQuery('.hamburger').on('click', function(){
		jQuery('nav').toggleClass('slideout');
	});
}