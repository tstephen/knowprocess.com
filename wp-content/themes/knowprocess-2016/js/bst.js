(function ($) {
	
	"use strict";

	$(document).ready(function() {

		// Comments
		$(".commentlist li").addClass("panel panel-default");
		$(".comment-reply-link").addClass("btn btn-default");
	
		// Forms
		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');
		
		// You can put your own code in here
		$('[data-toggle="dropdown"]').click(function(ev) { 
			$('#'+$(ev.target).data('target')).slideToggle();
		});
    // section control
		$('section .kp-collapse').click(function(ev) {
			var sect = $(ev.target).closest('section');
			console.info('toggle section: '+$(sect).attr('id'));
    	$('#'+$(sect).attr('id')+'>div').toggle();
    	$(ev.target).toggleClass('dashicons-arrow-right-alt2').toggleClass('dashicons-arrow-down-alt2');
		});
	});

}(jQuery));
