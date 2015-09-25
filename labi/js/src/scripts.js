$(function(){
	$(document).ready(function() {
		
		var menu = $('.desktopNav');
		var toggleMenu = $('#clickMe');

		$(toggleMenu).on('click', function(e){
			e.preventDefault();

			menu.fadeToggle(function(){
				if(menu.is(':hidden')){
					menu.removeAttr('style');
				}
			});
		});

		$('.mobileBtn').click(function() {
			$('.mobileBtn').toggleClass('cross');
		});

		$(".conThumb").css({backgroundSize: "cover"});
		
/*		$("#clickMe").click(function(){
			$("#nav").slideToggle("slow", function() {
				//test
			});
		});*/


  });
  
	if(!Modernizr.input.placeholder){
	
		$('[placeholder]').focus(function() {
			var input = $(this);
			if (input.val() === input.attr('placeholder')) {
				input.val('');
				input.removeClass('placeholder');
			}
		}).blur(function() {
			var input = $(this);
			if (input.val() === '' || input.val() === input.attr('placeholder')){
				input.addClass('placeholder');
				input.val(input.attr('placeholder'));
			}
		}).blur();
		
		$('[placeholder]').parents('form').submit(function() {
			$(this).find('[placeholder]').each(function() {
				var input = $(this);
				if (input.val() === input.attr('placeholder')) {
					input.val('');
				}
			});
		});
	}

	
});