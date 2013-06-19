$(function(){

    // External links with rel="external"
	    $('a[rel="external"]').live('click', function(e) {
	    	e.preventDefault();
	    	window.open( $(this).attr('href') )
	    })
	    
    // Social tab structure
    	// $('ul.social-info li > a').click(function(e) {
    		// e.preventDefault();
    		// var $this = $(this);
    		// var $li = $(this).parent();
//     		
    		// $li.siblings().removeClass('current');
    		// $li.addClass('current');
    	// })
// 	
	// classes filters 
		$('#verticals ul li a')
//			.click(function(e) {
//				e.preventDefault();
//				
//				var $this = $(this);
//				var $li = $this.parent();
//				var $ul = $this.parents('ul').eq(0);
//				var $items = $('ul.items', $ul.parents('#classes').eq(0)).eq(0);
//				var $controls = $this.parents('.controls').eq(0);
//				var filter = $this.attr('rel').toLowerCase();			
//				
//				var $disc = $('.controls ul').eq(0);
//				var $type = $('.controls ul').eq(1);
//				
//				var $discDesc = $('#class-descriptors > div').eq(0);
//				var $typeDesc = $('#class-descriptors > div').eq(1);
//				
//				$('a.current', $ul).removeClass('current');
//				$this.addClass('current');
//				
//				// console.log(filter);
//				
//				if(filter == "all") {
//					$('li[data-filter]', $items).stop(true,true).slideDown();
//					
//					if($ul.attr('id') == 'control-discipline') {
//						$('h3 > em', $discDesc).text('None Selected');
//						$('p', $discDesc).remove();
//					}
//					
//					else {
//						$('h3 > em', $typeDesc).text('None Selected');
//						$('p', $typeDesc).remove();						
//					}
//				}
//				
//				else {
//					$('li[data-filter]', $items).stop(true,true).slideUp();
//					
//					$('.current', $disc).each(function() {
//						var lfilter = $(this).attr('rel').toLowerCase();
//						$('li[data-filter~="' + lfilter + '"]', $items).stop(true,true).slideDown();
//					});
//
//					$('.current', $type).each(function() {
//						var lfilter = $(this).attr('rel').toLowerCase();
//						$('li[data-filter~="' + lfilter + '"]', $items).stop(true,true).slideDown();
//					});
//					
//					if($ul.attr('id') == 'control-discipline') {
//						$('h3 > em', $discDesc).text($this.text());
//						$('p', $discDesc).remove();						
//						$discDesc.append('<p>' + $this.data('desc') + '</p>');
//					}
//					
//					else {
//						$('h3 > em', $typeDesc).text($this.text());
//						$('p', $typeDesc).remove();						
//						$typeDesc.append('<p>' + $this.data('desc') + '</p>');
//					}
//				}
//			})
			.each(function() {
				var $this = $(this);
				var title = $this.attr('title');
				
				$this.data('desc', title)
				$this.attr('title', $this.text())
			})
		
	// classes descriptions
			// .each(function(){
				// var $this = $(this);
				// $this.attr('rel', $this.text().replace(/ /g, '-'));
			// })


	// quick hacks 
	
		if(window.location.search == '?cat=1'){
			$('header nav > ul > li').eq(1).addClass('current_page_item')
		};
	
//    // External links with REL
//	    $('a[rel="external"]').live('click', function(e) {
//	    	e.preventDefault();
//	    	window.open( $(this).attr('href') )
//	    })
//	    
//    // Old IE Fixes
//	    if ( $.browser.msie && $.browser.version < 9.0) {
//	    	// :first :last child 
//	    	$(':first-child').addClass('first-child');
//	    	$(':last-child').addClass('last-child');
//	    }
	    
	// Form Validation
		$('form#contact-us').validate({
			'labelpos' : 'absolute',
			'ajax' : false
		});


});
