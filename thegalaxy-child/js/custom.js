$(document).ready(function() {
	
	if ($('#skeleton_wrapper').length > 0) {
	
		$('.link_items').find('li.neckpain span').addClass('active');
		
		$('.skeleton').find('span.neckpain').addClass('active');
		
		$('.skeleton_description').find('span.neckpain').addClass('active');
		
		$('.link_items').find('li').hover(function() {
			
			var asdf = $(this).attr("class");
			
			$('.skeleton').find('span').each(function() {
				
				if($(this).hasClass(asdf)) {
					
					$(this).toggleClass('glow');
					
				}
				
			});
						
		});
		
		$('.link_items').find('li').click(function() {
			
			var asdf = $(this).attr("class");
			
			$('.link_items').find('li').each(function() {
				
				$(this).find('span').removeClass('active');
				
			});
			
			$(this).find('span').addClass('active');
			
			$('.skeleton').find('span').each(function() {
				
				$(this).removeClass('active');
				
				if($(this).hasClass(asdf)) {
					
					$(this).addClass('active');
					
				}
				
			});
			
			$('.skeleton_description').find('span').each(function() {
				
				$(this).removeClass('active');
				
				if($(this).hasClass(asdf)) {
					
					$(this).addClass('active');
					
				}
				
			});
						
		});
		
	}
	
	if ($('h1.heading').length > 0) {
		
		$('h1.heading').each(function() {
			
			var $element = $(this);
			$element.html($element.html().replace(/^(\w+)/, '<strong>$1</strong>'));
			
		});
		
	}

});