$(document).ready(function() {

	// Ajax load bootstrap modal
	$('[data-toggle="modal"]').on('click', function(e) {
		e.preventDefault();
		var handler = $(this);

		$(document).ajaxStart(function() {
			handler.append('<div class="preloader"></div>');
		}).ajaxStop(function() {
				handler.find('.preloader').remove();
				$(this).unbind("ajaxStart");
			});

		var url = '/?p=' + $(this).attr('data-project-id');
		if (url.indexOf('#') == 0) {
			$('.modalContent').toggle();
			console.log('indexof...');
		} else {
			$.get(url,function(data) {
				$('.modalContent').html(data).addClass("active");
				;
				$('.portfolio').addClass('mini')
			}).success(function() {
					$('iframe').wrap('<div class="video" />').wrap('<div class="video-object" />');
				});
		}
	});

	// menu
	$('.mainMenuOpener').click(function() {
		$(this).toggleClass('active');
		$('nav.main-menu').slideToggle();
	});
});
