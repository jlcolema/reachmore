// remap jQuery to $
(function($){})(window.jQuery);


/* trigger when page is ready */
$(document).ready(function (){

	// your functions go here
	
	function equalizeTextHeights(container, text) {
		container = $(container);
		text = $(text);
		var maxHeight = 0;
		container.each(function(index, element) {
			$(this).find(text).each(function() {
				if ($(this).height() > maxHeight) {
					maxHeight = $(this).height();
				};
			});
		});
		text.height(maxHeight);
	}
	equalizeTextHeights('.highlights .group', '.highlights .group .highlight');
	equalizeTextHeights('ul.thumbs li', 'ul.thumbs li p');
});


/* optional triggers

$(window).load(function() {
	
});

$(window).resize(function() {
	
});

*/