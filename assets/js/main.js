$(function() {
	
	// Cache the window object
	var $window = $(window);
	
	// Parallax background effect
	// Tutorial: http://code.tutsplus.com/tutorials/a-simple-parallax-scrolling-technique--net-27641
	
	$('section[data-type="background"]').each(function() {
		
		var $bgobj = $(this); // assigning the object
		
		$(window).scroll(function() {
			
			// scroll the background at var speed
			// the yPos is a negative value because we're scrolling it UP!
			
			var yPos = -($window.scrollTop() / $bgobj.data('speed'));
			
			// Put together our final background position
			var coords = '50% '+ yPos + 'px';
			
			// Move the background
			$bgobj.css({ backgroundPosition: coords });
			
		}); // end window scroll
		
	});
    
    
    $('#portfoliopage ul.list-inline>li>a').on('click', function(e) {
        var getCurrentTarget = $(this).attr('data-target');
        $('.photoGroup').hide();
        $('.' + getCurrentTarget).show();
    });
    $('#portfoliopage ul.list-inline>li>a.showAll').on('click', function(e) {
        $('.photoGroup').show();
    });
    
    $('body.single-download #menu-item-16').addClass('menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-11 current_page_item menu-item-16');
    
    var arrowDown = '<span class="arrow-down"></span>';
    $('ul#menu-primary-menu li.current-menu-item').append(arrowDown);
	
});