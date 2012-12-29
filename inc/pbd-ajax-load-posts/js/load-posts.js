jQuery(document).ready(function($) {

	// The number of the next page to load (/page/x/).
	var pageNum = parseInt(pbd_alp.startPage) + 1;
	
	// The maximum number of pages the current query can return.
	var max = parseInt(pbd_alp.maxPages);
	
	// The link of the next page of posts.
	var nextLink = pbd_alp.nextLink;
	
	/**
	 * Replace the traditional navigation with our own,
	 * but only if there is at least one page of new posts to load.
	 */
	if(pageNum <= max) {
		// Insert the "More Posts" link.
		$('#content')
			.append('<div class="pbd-alp-placeholder-'+ pageNum +'"></div>')
			.append('<h3 id="pbd-alp-load-posts" class="purple"><a href="#">Load More Posts</a></h3>');
			
		// Remove the traditional navigation.
		$('.navigation').remove();
	}
	
	
	/**
	 * Load new posts when the link is clicked.
	 */
	$('#pbd-alp-load-posts a').click(function() {
	
		// Are there more posts to load?
		if(pageNum <= max) {
		
			// Show that we're working.
			$(this).text('Loading posts...');
			
			$('.pbd-alp-placeholder-'+ pageNum).load(nextLink + ' .post',
				function() {

					_gaq.push([ '_trackPageview', nextLink ]);

					// Update page number and nextLink.
					pageNum++;
					nextLink = nextLink.replace(/\/page\/[0-9]?/, '/page/'+ pageNum);
					
					// Add a new placeholder, for when user clicks again.
					$('#pbd-alp-load-posts')
						.before('<div class="pbd-alp-placeholder-'+ pageNum +'"></div>')
					
					// Update the button message.
					if(pageNum <= max) {
						$('#pbd-alp-load-posts a').text('Load More Posts');
					} else {
						$('#pbd-alp-load-posts a').text('No more posts to load.');
					}
				}
			);

			// Update address bar url!
			if (typeof window.history.pushState == "function") {
				var stateObj = { dummy: 1000 + Math.random()*1001 };
				history.pushState( stateObj, "ajax page loaded...", nextLink );
			}

		} else {
			$('#pbd-alp-load-posts a').append('.');
		}

		
		return false;
	});
});






