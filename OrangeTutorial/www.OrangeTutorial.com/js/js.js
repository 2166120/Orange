$(document).ready(function(){
    		$('a').click(function(){
    			var selected = $(this);
    			$('a').removeClass('active');
    			$(selected).addClass('active');
    		});
    		var $a = $('.a'),
    		$b = $('.b'),
    		$c = $('.c'),
    		$d = $('.d'),
        $e = $('.e'),
    		$home = $('.home'),
    		$introduction = $('.introduction'),
    		$syntax = $('.syntax'),
    		$colors = $('.colors'),
        $backgrounds = $('.backgrounds');
    		$a.click(function(){
    			$home.fadeIn();
    			$introduction.fadeOut();
    			$syntax.fadeOut();
				  $colors.fadeOut();
          $backgrounds.faceOut();
    		});
    		$b.click(function() {
          $home.fadeOut();
    			$introduction.fadeIn();
    			$syntax.fadeOut();
				  $colors.fadeOut();
          $backgrounds.faceOut();
            });
    		$c.click(function() {
          $home.fadeOut();
    			$introduction.fadeOut();
    			$syntax.fadeIn();
				  $colors.fadeOut();
          $backgrounds.faceOut();
            });
    		$d.click(function() {
          $home.fadeOut();
    			$introduction.fadeOut();
    			$syntax.fadeOut();
				  $colors.fadeIn();
          $backgrounds.faceOut();
            });
        $e.click(function() {
          $home.fadeOut();
        	$introduction.fadeOut();
        	$syntax.fadeOut();
    			$colors.fadeOut();
          $backgrounds.fadeIn();
            });
    	});