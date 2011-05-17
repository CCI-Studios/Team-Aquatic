(function (window, document) {
	
	function setupSlideshow(slideshow) {
		var images, current, indicators, fx, fxs, trans,
			delay, duration;
		delay = 3000;
		duration = 2000;
		
		images = slideshow.getElements('.image');
		indicators = slideshow.getElements('.indicator');
		current = 0;
		
		fxs = [];
		images.each(function(image, index) {
			fx = new Fx.Styles(image, {
				duration: duration,
				onComplete: function() {
					
					var index;
					if (current == 0)
						index = images.length - 1;
					else
						index = current - 1;
						
					fxs[index].set({
						right: 735
					});
					images[index].removeClass('current');
					images[current].setStyle('z-index', 2);
					
					indicators.removeClass('current');
					indicators[current].addClass('current');
					
					trans.delay(delay);
				}
			});
			
			if (index == current) {
				fx.set({
					right: 0
				});
			} else {
				fx.set({
					right: 735
				});
			}
			fxs.push(fx);
		});
		
		trans = function () {
			current++;
			if (current == images.length)
				current = 0;
			
			fxs[current].start({
				right: 0,
			});
			images[current].addClass('current');
			images[current].setStyle('z-index', 3);
		};
		
		trans.delay(delay);
	}
	
	window.addEvent('domready', function() {
		$$('.mod_slideshow').each(function (slideshow) {
			setupSlideshow(slideshow);
		});
	});
})(this, this.document);